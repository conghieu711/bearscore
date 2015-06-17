<?php

define( 'BEARSCORE_DIR', __DIR__ );
define( 'BEARSCORE_URI', get_template_directory_uri() . '/bearscore/' ); 
define( 'BEARSCORE_LIB', BEARSCORE_DIR . '/libraries/' );
define( 'BEARSCORE_CLASS', BEARSCORE_DIR . '/class/' );
define( 'BEARSCORE_VERSION', 'Version 1.0.0' );

if( ! class_exists( 'Bearscore' ) ) {
    class Bearscore {
        var $theme_options = BEARSCORE_DIR . '/theme_options/theme_options.php';
        
        function __construct() {
            $this->include_libraries();
            $this->hook_init();
            
            // Enable support for Post Thumbnails, and declare two sizes.
            add_theme_support( 'post-thumbnails' );
            set_post_thumbnail_size( 672, 372, true );
            add_image_size( 'bears-full-width', 1038, 576, true );
        }
        
        function include_libraries() {
            // redux framework
            require_once( BEARSCORE_LIB . '/redux-framework-master/redux-framework.php' );

            // scssphp
            require_once( BEARSCORE_LIB . '/scssphp/scss.inc.php' );
            require_once( BEARSCORE_CLASS . '/scss.class.php' );
        }
        
        function hook_init() {
            add_action( 'wp_enqueue_scripts', array( &$this, 'register_assets' ) );
        }
        
        /*
        register_assets
        */
        function register_assets() {
            // bootstrap
            wp_register_style( 'style.bootstrap', BEARSCORE_URI . '/assets/css/bootstrap.min.css' );
            wp_register_script( 'script.bootstrap', BEARSCORE_URI . '/assets/js/bootstrap.min.js' );
        }
        
        /*
        use_assets
        @ $list_use : array list script name
        */
        function use_assets( $list_use ) {
            foreach( $list_use as $val ) {
                list( $type, $name ) = explode( '.', $val );
                
                switch( $type ) {
                    case 'style'    : wp_enqueue_style( $val ); break;
                    case 'script'   : wp_enqueue_script( $val ); break;
                }
            }
        }
        
        /*
        @ $params:
            $theme_options : 'dir modify themeoptions'
            
        */
        function init( $params = [] ) {
            extract( $params );
            
            # modify & include theme options
            isset( $theme_options ) ? $this->theme_options = $theme_options : '';
            $this->include_theme_options();
            
            
        }
        
        # include themeoptions
        function include_theme_options() {
            require_once( $this->theme_options );
        }

        # scss
        function use_scss( $parans ) {
            extract( $parans );

            $scss = new Bears_scss_class( $scss_dir, $scss_master_file, $css_output_file, $scss_formatter, $variable );
        }
    }
}
