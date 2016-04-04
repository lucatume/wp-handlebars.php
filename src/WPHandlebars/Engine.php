<?php


class WPHandlebars_Engine extends Handlebars_Engine {

	/**
	 * Handlebars engine constructor
	 * $options array can contain :
	 * helpers        => Handlebars_Helpers object
	 * escape         => a callable function to escape values
	 * escapeArgs     => array to pass as extra parameter to escape function
	 * loader         => Handlebars_Loader object
	 * partials_loader => Handlebars_Loader object
	 * cache          => Handlebars_Cache object
	 *
	 * @param array $options array of options to set
	 */
	public function __construct( array $options = array() ) {
		parent::__construct( $options );
		parent::addHelper( 'header', array( 'WPHandlebars_WPHelpers', '_helper_header' ) );
		parent::addHelper( 'footer', array( 'WPHandlebars_WPHelpers', '_helper_footer' ) );
		parent::addHelper( 'sidebar', array( 'WPHandlebars_WPHelpers', '_helper_sidebar' ) );
	}
}
