# WP Handlebars.php

*Handlebars processor for php 5.2 with some WordPress sugar.*

## Installation
Either download and copy the archive in your project or use [Composer](https://getcomposer.org/):

	composer require lucatume/wp-handlebars.php
	
## Usage
The repository use the `xamin/handlebars.php` library in its `php-52` branch for back compatibility reasons.  
Beside the WordPress specific helpers the `WPHandlebars_Engine` class can be used as a drop-in replacement for the `Handlebars_Engine` one.  
As such the example from the `xamin/handlebars.php` library applies:

    <?php

    // uncomment the following two lines, if you don't use composer
    // require 'vendor/xamin/handlebars.php/Handlebars/Autoloader.php';
    // Handlebars_Autoloader::register();

    $engine = new WPHandlebars_Engine;

    echo $engine->render(
        'Planets:<br />{{#each planets}}<h6>{{this}}</h6>{{/each}}',
        array(
            'planets' => array(
                "Mercury",
                "Venus",
                "Earth",
                "Mars"
            )
        )
    );

    <?php

    $engine = new WPHandlebars_Engine(array(
        'loader' => new Handlebars_Loader_FilesystemLoader(__DIR__.'/templates/'),
        'partials_loader' => new Handlebars_Loader_FilesystemLoader(
            __DIR__ . '/templates/',
            array(
                'prefix' => '_'
            )
        )
    ));

    /* templates/main.handlebars:

    {{> partial planets}}

    */

    /* templates/_partial.handlebars:

    {{#each this}}
        <file>{{this}}</file>
    {{/each}}

    */

    echo $engine->render(
        'main',
        array(
            'planets' => array(
                "Mercury",
                "Venus",
                "Earth",
                "Mars"
            )
        )
    );

    /* templates/page.handlebars template */
    
    {{#header}}

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        
            {{#each this}}
                {{#each posts}}
                    {{> content }} 
                    {{#if comments}}
                        {{> comments}} 
                    {{/if}}
                {{/each}}
            {{/each}}

        </main><!-- #main -->
    </div><!-- #primary -->
    
    {{#sidebar}}
    {{#footer}}

    echo $engine->render(
        'page',
        get_posts()
    );
    
### Header helper
The header helper will merely call the `get_header` WordPress function and print its output.

    {{#header}}

works as a call to

    <?php get_header(); ?>

and allows for a `$name` parameter to be passed to the function like:

    {{#header loop}}

works as a call to

    <?php get_header(); ?>

### Footer helper
The footer helper will merely call the `get_footer` WordPress function and print its output.

    {{#footer}}

works as a call to

    <?php get_footer(); ?>

and allows for a `$name` parameter to be passed to the function like:

    {{#footer loop}}

works as a call to

    <?php get_header('loop'); ?>

### Sidebar helper
The sidebar helper will merely call the `get_sidebar` WordPress function and print its output.

    {{#sidebar}}

works as a call to

    <?php get_sidebar(); ?>

and allows for a `$name` parameter to be passed to the function like:

    {{#sidebar loop}}

works as a call to

    <?php get_header('loop'); ?>
