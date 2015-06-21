<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Breadcumb', 'tb' ),
    'id'         => 'breadcumb',
    'icon'       => 'el el-random',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'            => 'opt-breadcumd-typography',
            'type'          => 'typography',
            'title'         => __( 'Typography', 'tb' ),
            'subtitle'      => __( 'Typography option with breadcumb text.', 'tb' ),
            'google'        => true,
            'font-backup'   => true,
            'letter-spacing'=> true,
            'output'        => array(),
            'units'         =>'px',
            'preview'       => array(
                'text'          => '1 2 3 4 5 6 7 8 9 0 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z',
                'font-size'     => '24px',
                //'always_display'=> true,
            ),
            'default'       => array(
                'color'         => '#5E5E5E',
                'font-size'     => '14px',
                'line-height'   => '25px',
                'font-family'   => 'Roboto',
                'font-weight'   => '400',
                'text-align'    => 'center'
            ),
        ),
    )
) );