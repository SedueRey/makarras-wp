<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" lang="es-ES">
<![endif]-->
<!--[if (gte IE 9) | !(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="shortcut icon" href="icon.png">
    <link rel="apple-touch-icon-precomposed" href="icon.png">
    <meta name="apple-mobile-web-app-title" content="">
    <link type="text/plain" rel="author" href="humans.txt">
    <link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_uri(); ?>" />
    <title>
        <?php wp_title( '&mdash;', true, 'right' ); bloginfo( 'name' ); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body>
    <header id="mainheader">
    	Logo & Menú
    </header>
    <main>