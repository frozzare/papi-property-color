<?php

/*
 * Plugin Name: Papi: Property Color
 * Description: Color picker property
 * Version: 1.0.0
 * Author: Fredrik Forsmo
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Add custom JavaScript to WordPress admin.
 *
 * @since 1.0.0
 */

function _papi_property_color_js() {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'papi-color-picker', plugins_url( '/assets/js/main.js', __FILE__ ), array( 'jquery', 'wp-color-picker' ), '', true );
}

add_action( 'admin_enqueue_scripts', '_papi_property_color_js' );

/**
 * Include Property Color.
 *
 * @since 1.0.0
 */

function _papi_include_property_color() {
  include_once 'class-papi-property-color.php';
}

add_action( 'papi_include_properties', '_papi_include_property_color' );
