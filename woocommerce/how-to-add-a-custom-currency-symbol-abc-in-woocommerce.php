<?php
/** 
* Author: UnmaskWP.com
* GitHub Link: https://github.com/MayankMajeji/Wordpress-Code-Snippets
* Post Link: https://unmaskwp.com/snippets/add-custom-currency-symbol-in-woocommerce/
*/ 

/**
 * Add Custom Currency Name
 */
function maverick_add_custom_currency_woocommerce( $currencies ) {
    $currencies['ABC'] = __( 'Currency name', 'woocommerce' );
    return $currencies;
}

add_filter( 'woocommerce_currencies', 'maverick_add_custom_currency_woocommerce' );

/**
 * Add Custom Currency Symbol
 */
function maverick_add_custom_currency_symbol_woocommerce( $currency_symbol, $currency ) {
    switch( $currency ) {
        case 'ABC': $currency_symbol = '$'; break;
    }
    return $currency_symbol;
}

add_filter('woocommerce_currency_symbol', 'maverick_add_custom_currency_woocommerce', 10, 2);

