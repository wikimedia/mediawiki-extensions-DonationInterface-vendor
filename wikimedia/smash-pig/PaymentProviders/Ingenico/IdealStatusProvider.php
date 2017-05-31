<?php

namespace SmashPig\PaymentProviders\Ingenico;

use Psr\Cache\CacheItemPoolInterface;
use SmashPig\Core\Context;
use SmashPig\Core\Http\OutboundRequest;

/**
 * Uses an unofficial API to look up status of iDEAL banks
 * see https://availability.ideal.nl
 */
class IdealStatusProvider {

	/**
	 * @var array()
	 */
	protected $cacheParameters;

	/**
	 * @var CacheItemPoolInterface
	 */
	protected $cache;

	/**
	 * @var string
	 */
	protected $availabilityUrl;

	public function __construct( array $options = array() ) {
		$this->cacheParameters = $options['cache-parameters'];
		$this->availabilityUrl = $options['availability-url'];
		// FIXME: provide objects in constructor
		$config = Context::get()->getConfiguration();
		$this->cache = $config->object( 'cache' );
	}

	/**
	 * Look up bank status
	 * @return array Keys are bank codes, values are names
	 */
	public function getBankStatus() {
		$cacheKey = $this->cacheParameters['key'];
		$cacheItem = $this->cache->getItem( $cacheKey );

		if ( !$cacheItem->isHit() ) {

			$banks = array();

			$url = $this->availabilityUrl;

			$request = new OutboundRequest( $url );
			$rawResponse = $request->execute();
			$response = json_decode( $rawResponse['body'], true );

			foreach ( $response['Issuers'] as $issuer ) {
				$banks[$issuer['BankId']] = array(
					'name' => $issuer['BankName'],
					'availability' => $issuer['Percent']
				);
			}

			$duration = $this->cacheParameters['duration'];

			$cacheItem->set( array(
				'value' => $banks,
				# TODO: determine timezone and parse this format: '22-3-2017, 23:40'
				'lastupdate' => $response['LastUpdate'],
				'expiration' => time() + $duration
			) );
			$cacheItem->expiresAfter( $duration );
			$this->cache->save( $cacheItem );
		}
		$cached = $cacheItem->get();
		return $cached['value'];
	}
}