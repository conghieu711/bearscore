<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Custom css', THEMENAME ),
    'id'         => 'custom-css',
    'icon'       => 'el el-css',
    'desc'       => __( '', THEMENAME ),
    'fields'     => array(    
        array(
            'id'         => 'opt-custom-css',
            'type'       => 'ace_editor',
            'title'      => __( 'Custom css', THEMENAME ),
        ),
    )
) );