<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SubhasishLiveTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    
    <!-- ==== Google Font ==== -->
    <link href="https://fonts.googleapis.com/css?family=Raleway+Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:400,400i,500,500i,700" rel="stylesheet">

    <!-- ==== Font Awesome ==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- ==== Bootstrap ==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ==== jQuery UI ==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.min.css" rel="stylesheet">
    
    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet">
    
    <!-- ====Main Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    
    <!-- ====Custom Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/custom-style.css" rel="stylesheet">
    <!-- my google adsense code -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-5420998719942443",
        enable_page_level_ads: true
      });
    </script>

    
	<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100" <?php body_class(); ?>>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Preloader Start -->
        <div id="preloader">
            <div class="preloader--bounce">
                <div class="preloader-bouncer--1"></div>
                <div class="preloader-bouncer--2"></div>
            </div>
        </div>
        <!-- Preloader End -->
        
        <!-- Header Area Start -->
        <div id="header">
            <nav class="header--navbar">
                <div class="container">
                    <div class="navbar">
                        <div class="navbar-header">
                            <!-- Header Custom Button Start -->
                            <div class="header--custom-btn hidden-lg hidden-md">
                                <a href="#hireMeModal" class="btn--default" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
                            </div>
                            <!-- Header Custom Button End -->
                        
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            <!-- Logo Start -->
                            <a class="logo navbar-brand" href="#">
                                <div class="logo--img">
                                    <img src="img/logo.png" class="img-responsive" alt="">
                                </div>
                                
                                <div class="logo--content">
                                    <h1>SUBHASISH <strong>NATH</strong></h1>
                                    <p><strong>UX/UI/FRONT END</strong> DESIGNER & DEVELOPER</p>
                                    <p><strong>ANDROID APPS</strong> DEVELOPER</p>
                                </div>
                            </a>
                            <!-- Logo End -->
                        </div>
                        
                        <!-- Header Custom Button Start -->
                        <div class="header--custom-btn hidden-sm hidden-xs">
                            <a href="#hireMeModal" class="btn--default" data-toggle="modal">HIRE ME</a>
                        </div>
                        <!-- Header Custom Button End -->
                        
                        <!-- Header Nav Start -->
                        <!-- <div id="headerNav" class="header--nav navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right AnimateScroll">
                                <li><a href="#banner">HOME</a></li>
                                <li><a href="#about">ABOUT</a></li>
                                <li><a href="#services">SERVICES</a></li>
                                <li><a href="#gallery">WORKS</a></li>
                                <li><a href="#feedback">FEEDBACK</a></li>
                                <li><a href="#blog">BLOG</a></li>
                                <li><a href="#contact">CONTACT</a></li>
                            </ul>
                        </div> -->

				     	<?php
					        wp_nav_menu( array(
					            'menu'              => 'primary',
					            'theme_location'    => 'primary',
					            'depth'             => 4,
					            'container'         => 'div',
					            'container_class'   => 'collapse navbar-collapse header--nav',
					            'container_id'      => 'headerNav',
					            'menu_class'        => 'nav navbar-nav navbar-right AnimateScroll',
					            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					            'walker'            => new wp_bootstrap_navwalker())
					        );
			    		?>

                        <!-- Header Nav End -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header Area End -->
