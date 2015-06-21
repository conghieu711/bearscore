<?php
$option_info = "<center><div style='width: 80%; padding-bottom: 20px;'>
<h2>BEARS theme</h2>
<div style='padding: 20px 0;'>
    <a style='display: inline-block; margin-right: 40px' href=''>
        <img src='". BEARSCORE_URI .'/assets/images/version-img.png' ."'>
        <p style='display: block'>Version</p>
    </a>
    <a style='display: inline-block; margin-right: 40px' href=''>
        <img src='". BEARSCORE_URI .'/assets/images/bearsthemestore-img.png' ."'>
        <p style='display: block'>BEARS theme</p>
    </a>
    <a style='display: inline-block' href=''>
        <img src='". BEARSCORE_URI .'/assets/images/contact-img.png' ."'>
        <p style='display: block'>Contact</p>
    </a>
</div>
<p>
    The 2015 theme for WordPress is a fully responsive theme that looks great on any device. Features include a front page template with its own widgets, an optional display font, styling for post formats on both index and single views, and an optional no-sidebar page template. Make it yours with a custom menu, header image, and background.
</p>
</div></center>";

Redux::setSection( $opt_name, array(
    'title'     => __( 'Main Options', 'bt' ),
    'id'        => 'main_options',
    'desc'      => __( '', 'tb' ),
    'icon'      => 'el el-dashboard',
    'desc'      => $option_info,
) );