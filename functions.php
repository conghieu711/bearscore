<?php

define( 'TEMPLATE_DIR', get_template_directory() ); 
define( 'TEMPLATE_URI', get_template_directory_uri() ); 
define( 'TEMPLATE_VERSION', 'Version 1.0.0' );

# include Bearscore
require_once( TEMPLATE_DIR . '/bearscore/bearscore.php' );
$bcore = new Bearscore();
$bcore->init();

// use scss
$scss_variable = array(
    'body_background_color' => '#FFF',
    );

$params_scss = array(
    "scss_dir"          => TEMPLATE_DIR . '/assets/scss/',
    "scss_master_file"  => 'master.scss',
    "css_output_file"   => TEMPLATE_DIR . '/assets/css/main.css',
    "scss_formatter"    => 'scss_formatter_compressed',
    "variable"          => $scss_variable,
    );
$bcore->use_scss( $params_scss );

#START functions

if( ! function_exists( 'bearscoretheme_setup' ) ) {
    function bearscoretheme_setup() {
        
    }
}
add_action( 'after_setup_theme', 'bearscoretheme_setup' );

// load assets
function bearscoretheme_scripts() {
    global $bcore;
    
    wp_enqueue_script( 'jquery' );
    $bcore->use_assets( [ 'style.bootstrap', 'script.bootstrap' ] );
    
    // main css
    wp_register_style( 'style.main', TEMPLATE_URI . '/assets/css/main.css' );
    wp_enqueue_style( 'style.main' );
}
add_action( 'wp_enqueue_scripts', 'bearscoretheme_scripts' );

// Header template
function bearstheme_header_template( $template = 'default', $params = [] ) {
    extract( $params );
    
    ob_start();
    include( TEMPLATE_DIR . '/header_templates/' . $template . '.php' );
    echo ob_get_clean();
}

// Footer template
function bearstheme_footer_template( $template = 'default', $params = [] ) {
    extract( $params );
    
    ob_start();
    include( TEMPLATE_DIR . '/footer_templates/' . $template . '.php' );
    echo ob_get_clean();
}

#END functions


