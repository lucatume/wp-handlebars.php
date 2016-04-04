<?php
/**
 * Stub WordPress functions used in helpers.
 */

if ( ! function_exists( 'get_header' ) ) {
	function get_header( $name = '' ) {
		echo empty( $name ) ? 'header' : 'header-' . $name;
	}
}

if ( ! function_exists( 'get_footer' ) ) {
	function get_footer( $name = '' ) {
		echo empty( $name ) ? 'footer' : 'footer-' . $name;
	}
}

if ( ! function_exists( 'get_sidebar' ) ) {
	function get_sidebar( $name = '' ) {
		echo empty( $name ) ? 'sidebar' : 'sidebar-' . $name;
	}
}
