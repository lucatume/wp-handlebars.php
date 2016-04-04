<?php


class WPHandlebars_Engine extends Handlebars_Engine {

	/**
	 * @var Handlebars_Engine
	 */
	protected $handlebars;

	/**
	 * @var bool
	 */
	protected $addedWPHelpers;

	/**
	 * WPHandlebars_Engine constructor.
	 *
	 * @param array $options
	 */
	/** @noinspection PhpMissingParentConstructorInspection */
	public function __construct( array $options = array() ) {
		$this->handlebars = new Handlebars_Engine( $options );
	}

	/**
	 * Get helpers, or create new one if there is no helper
	 *
	 * @return Handlebars_Helpers
	 */
	public function getHelpers() {
		if ( ! $this->addedWPHelpers ) {
			$this->handlebars->addHelper( 'header', array( 'WPHandlebars_WPHelpers', '_helper_header' ) );
			$this->handlebars->addHelper( 'footer', array( 'WPHandlebars_WPHelpers', '_helper_footer' ) );
			$this->handlebars->addHelper( 'sidebar', array( 'WPHandlebars_WPHelpers', '_helper_sidebar' ) );
			$this->addedWPHelpers = true;
		}

		return $this->handlebars->getHelpers();
	}

	/**
	 * Add a new helper.
	 *
	 * @param string $name   helper name
	 * @param mixed  $helper helper callable
	 *
	 * @return void
	 */
	public function addHelper( $name, $helper ) {
		$this->handlebars->addHelper( $name, $helper );
	}

}