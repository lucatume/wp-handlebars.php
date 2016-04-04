<?php


/**
 * Class WPHandlebars_WPHelpers
 *
 * Provides WordPress specific Handlebars.php helpers.
 */
class WPHandlebars_WPHelpers extends Handlebars_Helpers {

	protected function addDefaultHelpers() {
		parent::addDefaultHelpers();
		$this->add( 'header', array( 'WPHandlebars_WPHelpers', '_helper_header' ) );
		$this->add( 'footer', array( 'WPHandlebars_WPHelpers', '_helper_footer' ) );
		$this->add( 'sidebar', array( 'WPHandlebars_WPHelpers', '_helper_sidebar' ) );
	}

	public static function _helper_header( $template, $context, $args, $source ) {
		$name = $args ? $args : '';

		ob_start();

		get_header( $name );

		return ob_get_clean();
	}

	public static function _helper_footer( $template, $context, $args, $source ) {
		$name = $args ? $args : '';

		ob_start();

		get_footer( $name );

		return ob_get_clean();
	}

	public static function _helper_sidebar( $template, $context, $args, $source ) {
		$name = $args ? $args : '';

		ob_start();

		get_sidebar( $name );

		return ob_get_clean();
	}
}