<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="generator" content="<?php echo esc_url( home_url( '/' ) ); ?>"/>    
<meta name="copyright" content="Copyright (c) <?php echo date('Y'); ?> Her Hakkı Saklıdır">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class( '' ); ?>>
<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> false, 'menu_class' => '', 'menu_id' => '') ); ?>