<?php


class WPHandlebars_WPHelpersTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 * it should return the default header when using header helper without value
	 */
	public function it_should_return_the_default_header_when_using_header_helper_without_value() {
		$sut = $this->make_instance();

		$template = '{{#header}}';
		$data     = [ ];
		$this->assertEquals( 'header', $sut->render( $template, $data ) );
	}

	/**
	 * @test
	 * it should return the named header when using header helper with a value
	 */
	public function it_should_return_the_named_header_when_using_header_helper_with_a_value() {
		$sut = $this->make_instance();

		$template = '{{#header foo}}';
		$data     = [ ];
		$this->assertEquals( 'header-foo', $sut->render( $template, $data ) );
	}

	/**
	 * @test
	 * it should return the default footer when using footer helper without value
	 */
	public function it_should_return_the_default_footer_when_using_footer_helper_without_value() {
		$sut = $this->make_instance();

		$template = '{{#footer}}';
		$data     = [ ];
		$this->assertEquals( 'footer', $sut->render( $template, $data ) );
	}

	/**
	 * @test
	 * it should return the named footer when using footer helper with a value
	 */
	public function it_should_return_the_named_footer_when_using_footer_helper_with_a_value() {
		$sut = $this->make_instance();

		$template = '{{#footer foo}}';
		$data     = [ ];
		$this->assertEquals( 'footer-foo', $sut->render( $template, $data ) );
	}

	/**
	 * @test
	 * it should return the default sidebar when using sidebar helper without value
	 */
	public function it_should_return_the_default_sidebar_when_using_sidebar_helper_without_value() {
		$sut = $this->make_instance();

		$template = '{{#sidebar}}';
		$data     = [ ];
		$this->assertEquals( 'sidebar', $sut->render( $template, $data ) );
	}

	/**
	 * @test
	 * it should return the named sidebar when using sidebar helper with a value
	 */
	public function it_should_return_the_named_sidebar_when_using_sidebar_helper_with_a_value() {
		$sut = $this->make_instance();

		$template = '{{#sidebar foo}}';
		$data     = [ ];
		$this->assertEquals( 'sidebar-foo', $sut->render( $template, $data ) );
	}

	protected function make_instance() {
		return new WPHandlebars_Engine();
	}

}
