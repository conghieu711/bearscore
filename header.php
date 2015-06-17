<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/bearscore/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page"> <!-- Open #page -->
        <header id="header" class="bears-header"> <!-- Open <header> -->
            <div class="header-main">
                <nav class="top-nav">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-left">1</div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">2</div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right">3</div>
                        </div>
                    </div>
                </nav>
                <?php bearstheme_header_template( 'default' ); ?>
            </div>
        </header> <!-- Close <header> -->
        <div id="main" class="bears-main"> <!-- Open #main -->
        