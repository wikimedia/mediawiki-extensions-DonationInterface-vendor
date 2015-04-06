<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AdyenAdapter' => $baseDir . '/adyen_gateway/adyen.adapter.php',
    'AdyenGateway' => $baseDir . '/adyen_gateway/adyen_gateway.body.php',
    'AdyenGatewayResult' => $baseDir . '/adyen_gateway/adyen_resultswitcher.body.php',
    'AmazonAdapter' => $baseDir . '/amazon_gateway/amazon.adapter.php',
    'AmazonGateway' => $baseDir . '/amazon_gateway/amazon_gateway.body.php',
    'CurrencyRates' => $baseDir . '/gateway_common/CurrencyRates.php',
    'DataValidator' => $baseDir . '/gateway_common/DataValidator.php',
    'DonationApi' => $baseDir . '/gateway_common/donation.api.php',
    'DonationData' => $baseDir . '/gateway_common/DonationData.php',
    'DonationLogProcessor' => $baseDir . '/gateway_common/DonationLogProcessor.php',
    'DonationLoggerFactory' => $baseDir . '/gateway_common/DonationLoggerFactory.php',
    'EncodingMangler' => $baseDir . '/gateway_common/EncodingMangler.php',
    'GatewayAdapter' => $baseDir . '/gateway_common/gateway.adapter.php',
    'GatewayPage' => $baseDir . '/gateway_common/GatewayPage.php',
    'GatewayType' => $baseDir . '/gateway_common/gateway.adapter.php',
    'GlobalCollectAdapter' => $baseDir . '/globalcollect_gateway/globalcollect.adapter.php',
    'GlobalCollectGateway' => $baseDir . '/globalcollect_gateway/globalcollect_gateway.body.php',
    'GlobalCollectGatewayResult' => $baseDir . '/globalcollect_gateway/globalcollect_resultswitcher.body.php',
    'GlobalCollectOrphanAdapter' => $baseDir . '/globalcollect_gateway/scripts/orphan_adapter.php',
    'GlobalCollectOrphanRectifier' => $baseDir . '/globalcollect_gateway/scripts/orphans.php',
    'LogPrefixProvider' => $baseDir . '/gateway_common/gateway.adapter.php',
    'MWException' => $baseDir . '/gateway_common/MWException.drupal.php',
    'NationalCurrencies' => $baseDir . '/gateway_common/NationalCurrencies.php',
    'PaymentMethod' => $baseDir . '/gateway_common/PaymentMethod.php',
    'PaymentResult' => $baseDir . '/gateway_common/PaymentResult.php',
    'PaypalAdapter' => $baseDir . '/paypal_gateway/paypal.adapter.php',
    'PaypalGateway' => $baseDir . '/paypal_gateway/paypal_gateway.body.php',
    'PaypalGatewayResult' => $baseDir . '/paypal_gateway/paypal_resultswitcher.body.php',
    'WmfFrameworkLogHandler' => $baseDir . '/gateway_common/WmfFrameworkLogHandler.php',
    'WmfFramework_Drupal' => $baseDir . '/gateway_common/WmfFramework.drupal.php',
    'WmfFramework_Mediawiki' => $baseDir . '/gateway_common/WmfFramework.mediawiki.php',
    'WorldPayAdapter' => $baseDir . '/worldpay_gateway/worldpay.adapter.php',
    'WorldPayGateway' => $baseDir . '/worldpay_gateway/worldpay_gateway.body.php',
    'WorldPayValidateApi' => $baseDir . '/worldpay_gateway/worldpay.api.php',
);
