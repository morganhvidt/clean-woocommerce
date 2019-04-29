<?php
/**
 * Plugin Name: Clean WooCommerce
 * Plugin URI:  https://morganhvidt.com/
 * Description: Removes WoCommerce extension ads, suggestions and other nags. Keep it clean.
 * Version:     1.0.1
 * Author:      Morgan Hvidt
 * Author URI:  https://morganhvidt.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * WC requires at least: 3.5
 * WC tested up to: 3.6
 */

// Remove the sugesstions
add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false' );
// Remove 'connect your store to WooCommerce.com'
add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );
