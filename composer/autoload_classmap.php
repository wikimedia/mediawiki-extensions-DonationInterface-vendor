<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AdyenAdapter' => $baseDir . '/adyen_gateway/adyen.adapter.php',
    'AdyenGateway' => $baseDir . '/adyen_gateway/adyen_gateway.body.php',
    'AdyenGatewayResult' => $baseDir . '/adyen_gateway/adyen_resultswitcher.body.php',
    'AmazonAdapter' => $baseDir . '/amazon_gateway/amazon.adapter.php',
    'AmazonBillingApi' => $baseDir . '/amazon_gateway/amazon.api.php',
    'AmazonGateway' => $baseDir . '/amazon_gateway/amazon_gateway.body.php',
    'CurrencyRates' => $baseDir . '/gateway_common/CurrencyRates.php',
    'CyclicalArray' => $baseDir . '/globalcollect_gateway/CyclicalArray.php',
    'DataValidator' => $baseDir . '/gateway_common/DataValidator.php',
    'DonationApi' => $baseDir . '/gateway_common/donation.api.php',
    'DonationData' => $baseDir . '/gateway_common/DonationData.php',
    'DonationLogProcessor' => $baseDir . '/gateway_common/DonationLogProcessor.php',
    'DonationLoggerFactory' => $baseDir . '/gateway_common/DonationLoggerFactory.php',
    'DonationQueue' => $baseDir . '/gateway_common/DonationQueue.php',
    'EncodingMangler' => $baseDir . '/gateway_common/EncodingMangler.php',
    'FinalStatus' => $baseDir . '/gateway_common/FinalStatus.php',
    'GatewayAdapter' => $baseDir . '/gateway_common/gateway.adapter.php',
    'GatewayPage' => $baseDir . '/gateway_common/GatewayPage.php',
    'GatewayType' => $baseDir . '/gateway_common/gateway.adapter.php',
    'GlobalCollectAdapter' => $baseDir . '/globalcollect_gateway/globalcollect.adapter.php',
    'GlobalCollectGateway' => $baseDir . '/globalcollect_gateway/globalcollect_gateway.body.php',
    'GlobalCollectGatewayResult' => $baseDir . '/globalcollect_gateway/globalcollect_resultswitcher.body.php',
    'GlobalCollectOrphanAdapter' => $baseDir . '/globalcollect_gateway/orphan.adapter.php',
    'GlobalCollectOrphanRectifier' => $baseDir . '/globalcollect_gateway/GlobalCollectOrphanRectifier.php',
    'GlobalCollectRefundMaintenance' => $baseDir . '/globalcollect_gateway/scripts/refund.php',
    'LCRun3' => $vendorDir . '/zordius/lightncandy/src/lightncandy.php',
    'LightnCandy' => $vendorDir . '/zordius/lightncandy/src/lightncandy.php',
    'LogPrefixProvider' => $baseDir . '/gateway_common/gateway.adapter.php',
    'MessageUtils' => $baseDir . '/gateway_common/MessageUtils.php',
    'NationalCurrencies' => $baseDir . '/gateway_common/NationalCurrencies.php',
    'OrphanMaintenance' => $baseDir . '/globalcollect_gateway/scripts/orphans.php',
    'PaymentMethod' => $baseDir . '/gateway_common/PaymentMethod.php',
    'PaymentResult' => $baseDir . '/gateway_common/PaymentResult.php',
    'PaymentTransactionResponse' => $baseDir . '/gateway_common/PaymentTransactionResponse.php',
    'PaypalAdapter' => $baseDir . '/paypal_gateway/paypal.adapter.php',
    'PaypalGateway' => $baseDir . '/paypal_gateway/paypal_gateway.body.php',
    'PaypalGatewayResult' => $baseDir . '/paypal_gateway/paypal_resultswitcher.body.php',
    'ResponseCodes' => $baseDir . '/gateway_common/ResponseCodes.php',
    'ResponseProcessingException' => $baseDir . '/gateway_common/ResponseProcessingException.php',
    'WmfFrameworkLogHandler' => $baseDir . '/gateway_common/WmfFrameworkLogHandler.php',
    'WmfFramework_Drupal' => $baseDir . '/gateway_common/WmfFramework.drupal.php',
    'WmfFramework_Mediawiki' => $baseDir . '/gateway_common/WmfFramework.mediawiki.php',
    'WorldpayAdapter' => $baseDir . '/worldpay_gateway/worldpay.adapter.php',
    'WorldpayGateway' => $baseDir . '/worldpay_gateway/worldpay_gateway.body.php',
    'WorldpayGatewayResult' => $baseDir . '/worldpay_gateway/worldpay_resultswitcher.body.php',
    'WorldpayValidateApi' => $baseDir . '/worldpay_gateway/worldpay.api.php',
);
