<?php
$logo_position = isset( $logo_position ) ? $logo_position : 'default';
function logo_html() {
    
    return implode( '', array(
        '<div id="logo" class="bears-logo text-center">',
            '<a href="#">Logo</a>',
        '</div>'
    ) );
}

function menu_html() {
    $args = array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => false,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    );
    
    return implode( '', array(
        '<nav class="menu-nav">',
            '<div class="container">',
                '<div class="row">',
                    wp_nav_menu( $args ),
                '</div>',
            '</div>',
        '</nav>'        
    ) );
}

switch( $logo_position ) {
    case 'bottom':
        echo menu_html(), logo_html();
        break;
    default:
        echo logo_html(), menu_html();
        break;
}
?>

