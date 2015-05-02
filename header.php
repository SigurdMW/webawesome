<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo( 'description' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--favico-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/img/favico/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favico/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favico/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favico/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ?>/img/favico/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo('template_directory') ?>/img/favico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory') ?>/img/favico/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--/favico-->

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animsition.min.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft:400,500,700,400italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
<div class="animsition">
    <header class="page-header">
		<div class="menu-container">
            <div class="css-table">
                <div class="css-table-cell">
                   <div class="dropdown wa-menu">
                    <button id="waMeny" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-wa header-menu-button"></button>
                          <div class="dropdown-menu" role="menu" aria-labelledby="waMeny">
                             <?php wp_nav_menu(); ?> 
                          </div>
                    </div>
                </div>
                <div class="css-table-cell page-title">
                    <div class="page-title-web">web</div>
                    <div class="page-title-awesome">awesome</div>
                </div>
            </div>
        </div>
	</header>
 <div class="container main-content">