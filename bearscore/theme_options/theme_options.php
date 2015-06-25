<?php
    define( 'OPTIONS_DIR', __DIR__ );
    global $bcore;

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = $bcore->opt_name;

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => THEMENAME,
        'page_title'           => THEMENAME,
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'bearstheme-docs',
        'href'  => '#',
        'title' => __( 'Documentation', THEMENAME ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => '#',
        'title' => __( 'Support', THEMENAME ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'bearstheme-extensions',
        'href'  => '#',
        'title' => __( 'Extensions', THEMENAME ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => '#',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => '#',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => '#',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => '#',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( ' ', THEMENAME ) );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', THEMENAME );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>Thank you! :)</p>', THEMENAME );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
    ---> START SECTIONS
    */

    // -> START Main Options
    require_once( OPTIONS_DIR . '/options_section/main_options/main_options.php' );
    // -> END Baisc Fields
    
    // -> START Header
    require_once( OPTIONS_DIR . '/options_section/header/header.php' );
    require_once( OPTIONS_DIR . '/options_section/header/header-top.php' );
    require_once( OPTIONS_DIR . '/options_section/header/logo.php' );
    require_once( OPTIONS_DIR . '/options_section/header/menu.php' );
    // -> End Header

    // -> START Pagetitle & Breadcumb
    require_once( OPTIONS_DIR . '/options_section/pagetitle_breadcumb/pagetitle_breadcumb.php' );
    require_once( OPTIONS_DIR . '/options_section/pagetitle_breadcumb/pagetitle.php' );
    require_once( OPTIONS_DIR . '/options_section/pagetitle_breadcumb/breadcumb.php' );
    // -> END Pagetitle & Breadcumb

    // -> START Body
    require_once( OPTIONS_DIR . '/options_section/body/body.php' );
    require_once( OPTIONS_DIR . '/options_section/body/content.php' );
    require_once( OPTIONS_DIR . '/options_section/body/page-loadding.php' );
    // -> END Body

    // -> START Footer
    require_once( OPTIONS_DIR . '/options_section/footer/footer.php' );
    require_once( OPTIONS_DIR . '/options_section/footer/footer-top.php' );
    require_once( OPTIONS_DIR . '/options_section/footer/footer-bottom.php' );
    // -> END Footer

    // -> START Button
    require_once( OPTIONS_DIR . '/options_section/button/button.php' );
    require_once( OPTIONS_DIR . '/options_section/button/button-default.php' );
    require_once( OPTIONS_DIR . '/options_section/button/button-primary.php' );
    // -> END Button

    // -> START Styling
    require_once( OPTIONS_DIR . '/options_section/styling/styling.php' );
    require_once( OPTIONS_DIR . '/options_section/styling/header-top-color.php' );
    require_once( OPTIONS_DIR . '/options_section/styling/header-main-color.php' );
    require_once( OPTIONS_DIR . '/options_section/styling/menu-color.php' );
    require_once( OPTIONS_DIR . '/options_section/styling/sticky-header-color.php' );
    require_once( OPTIONS_DIR . '/options_section/styling/button-color.php' );
    require_once( OPTIONS_DIR . '/options_section/styling/footer-top-color.php' );
    require_once( OPTIONS_DIR . '/options_section/styling/footer-bottom-color.php' );
    // -> END Styling

    // -> START typography
    require_once( OPTIONS_DIR . '/options_section/typography/typography.php' );
    require_once( OPTIONS_DIR . '/options_section/typography/extra-fonts.php' );
    // -> END typography
    
    // -> START Custom css
    require_once( OPTIONS_DIR . '/options_section/custom-css.php' );
    // -> END Custom css

    /*
    ---> END SECTIONS
    */