<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(); ?></title>
		
		<!-- Metadati -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="FFLab">
		<meta name="description" content="<?php bloginfo('description') ?>">
	
		<!-- Favicon -->
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Atma:300,400,600" rel="stylesheet">
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
<header>
<div class="container">
    <div class="row">
       
        <!--  Navbar Brand Bootstrap-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--    navbar-brand: logo/testo nome del sito       --><strong><a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a></strong> </div>
            <!-- Navigazione Dinamica -->
            <?php
        wp_nav_menu(array(
            'theme_location' => 'principale',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker()
        ));
        ?>
        
        </nav>
             
    </div>
</div>
</header>
	<!-- Fine intestazione (header.php) -->