<?php
Redux::setSection( $opt_name, array(
    'title'      => __( 'Extra fonts', 'tb' ),
    'id'         => 'extra-fonts',
    'icon'       => 'el el-fontsize',
    'desc'       => __( '', 'tb' ),
    'subsection' => true,
    'fields'     => array(
        array(
            'id'            => 'opt-extra-font-one',
            'type'          => 'typography',
            'title'         => __( 'Font 1', 'tb' ),
            'subtitle'      => __( '', 'tb' ),
            'google'        => true,
            'font-backup'   => true,
            'letter-spacing'=> true,
            //'output'        => array( '' ),
            'preview'       => array(
                'text'          => '1 2 3 4 5 6 7 8 9 0 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z',
                'font-size'     => '24px',
                //'always_display'=> true,
            ),
            'units'         =>'px',
            'default'       => array(
                'color'         => '#878787',
                'font-size'     => '14px',
                'line-height'   => '25px',
                'font-family'   => 'Roboto',
                'font-weight'   => '400',
            ),
        ),
        array(
            'id'            => 'opt-selector-font-one',
            'type'          => 'textarea',
            'title'         => __( 'Selector 1', 'tb' ),
            'subtitle'      => __( 'add html tags ID or class (body,a,.class,#id)', 'tb' ),
        ),
        array(
            'id'            => 'opt-extra-font-two',
            'type'          => 'typography',
            'title'         => __( 'Font 2', 'tb' ),
            'subtitle'      => __( '', 'tb' ),
            'google'        => true,
            'font-backup'   => true,
            'letter-spacing'=> true,
            //'output'        => array( '' ),
            'preview'       => array(
                'text'          => '1 2 3 4 5 6 7 8 9 0 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z',
                'font-size'     => '24px',
                //'always_display'=> true,
            ),
            'units'         =>'px',
            'default'       => array(
                'color'         => '#878787',
                'font-size'     => '14px',
                'line-height'   => '25px',
                'font-family'   => 'Roboto',
                'font-weight'   => '400',
            ),
        ),
        array(
            'id'            => 'opt-selector-font-two',
            'type'          => 'textarea',
            'title'         => __( 'Selector 2', 'tb' ),
            'subtitle'      => __( 'add html tags ID or class (body,a,.class,#id)', 'tb' ),
        )
    )
) );