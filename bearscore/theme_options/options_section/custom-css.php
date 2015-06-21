<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Custom css', 'tb' ),
    'id'         => 'custom-css',
    'icon'       => 'el el-css',
    'desc'       => __( '', 'tb' ),
    'fields'     => array(    
        array(
            'id'         => 'opt-custom-css',
            'type'       => 'ace_editor',
            'title'      => __( 'Custom css', 'tb' ),
        ),
    )
) );