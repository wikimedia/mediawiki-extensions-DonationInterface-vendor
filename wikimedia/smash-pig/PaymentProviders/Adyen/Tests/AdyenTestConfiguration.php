<?php namespace SmashPig\PaymentProviders\Adyen\Tests;

use SmashPig\Core\GlobalConfiguration;
use SmashPig\Tests\TestingProviderConfiguration;

class AdyenTestConfiguration extends TestingProviderConfiguration {

	public static function instance( $overrides = [], GlobalConfiguration $globalConfig ) {
		$config = static::createForProvider( 'adyen', $globalConfig );
		$config->override( $overrides );

		return $config;
	}

	public static function createWithSuccessfulApi( GlobalConfiguration $globalConfig ) {
		$override = [ 'api' =>
			[
				'class' => 'SmashPig\PaymentProviders\Adyen\Tests\MockAdyenPaymentsAPI',
				'constructor-parameters' =>
					[ 'Success!' ]
			]
		];
		return self::instance( $override, $globalConfig );
	}

	public static function createWithUnsuccessfulApi( GlobalConfiguration $globalConfig ) {
		$override = [ 'api' =>
			[
				'class' => 'SmashPig\PaymentProviders\Adyen\Tests\MockAdyenPaymentsAPI',
				'constructor-parameters' =>
					// FIXME: Really?  or boolean `false` as it would be if
					// we parsed "false" from yaml?
					[ 'false' ]
			]
		];
		return self::instance( $override, $globalConfig );
	}
}
