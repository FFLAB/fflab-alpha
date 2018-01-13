<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
		<title><?php bloginfo('title'); ?></title>
		
		<!-- Metadati -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="FFLab">
		<meta name="description" content="<?php bloginfo('description') ?>">
	
		<!-- Favicon -->
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/png">
<!--    <link href="https://fonts.googleapis.com/css?family=Atma:300,400,600" rel="stylesheet">-->
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600" rel="stylesheet">
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
	
	 <!-- Navigation -->
<div class="bghead">
    <header class="container">
           <!--  Navbar Brand Bootstrap-->
            <!--Bs 4 -->
                <nav class="navbar fixed-top navbar-expand-md navbar-light">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
           <h2><?php bloginfo("name"); ?></h2>
            </a>
            <span class="d-none d-lg-block d-xl-block"><small><?php bloginfo('description'); ?></small></span>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

                <!-- WP Navigation -->
            <?php 
                wp_nav_menu(array(
                'theme_location' => 'principale',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarsExample03',
                'menu_id' => false,
                'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>  
    </header>   
</div>
	<!-- Fine intestazione (header.php) -->