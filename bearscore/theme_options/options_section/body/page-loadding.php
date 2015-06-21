<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Page loadding', 'tb' ),
    'id'         => 'page_loadding',
    'icon'       => 'el el-compass',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-page-loadding',
            'type'     => 'switch',
            'title'    => __( 'Page loadding', 'tb' ),
            'subtitle' => __( 'enable page loadding.', 'tb' ),
            'default'  => false,
        ),
    )
) );