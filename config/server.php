<?php
/**
 *                       ######
 *                       ######
 * ############    ####( ######  #####. ######  ############   ############
 * #############  #####( ######  #####. ######  #############  #############
 *        ######  #####( ######  #####. ######  #####  ######  #####  ######
 * ###### ######  #####( ######  #####. ######  #####  #####   #####  ######
 * ###### ######  #####( ######  #####. ######  #####          #####  ######
 * #############  #############  #############  #############  #####  ######
 *  ############   ############  #############   ############  #####  ######
 *                                      ######
 *                               #############
 *                               ############
 *
 * Adyen Checkout Example (https://www.adyen.com/)
 *
 * Copyright (c) 2017 Adyen BV (https://www.adyen.com/)
 *
 */

function url(){
    $protocol = 'https';

    return sprintf(
        "%s://%s", $protocol, $_SERVER['HTTP_HOST']
    );
}

/** Adyen checkout endpoints */
$checkoutBaseURL = 'https://checkout-test.adyen.com/services/PaymentSetupAndVerification/v31';
$checkoutSetupURL = $checkoutBaseURL . '/setup';
$checkoutVerifyURL = $checkoutBaseURL . '/verify';

/** Your server endpoints */
/** @var $returnURL - the url you want the shopper to return to after they complete their transaction */
$returnURL = url();

/** Shopper IP */
$shopperIP = $_SERVER['REMOTE_ADDR'];

return [
    'origin' => 'https://adyen-checkout-aleg.herokuapp.com',
    'baseURL' => $checkoutBaseURL,
    'setupURL' => $checkoutSetupURL,
    'verifyURL' => $checkoutVerifyURL,
    'returnURL' => 'https://adyen-checkout-aleg.herokuapp.com',
    'shopperIP' => $shopperIP,
];
