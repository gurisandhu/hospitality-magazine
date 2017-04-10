<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"> 
    <!-- [if IE]>
        <script src="http://html5shiv.google.ecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if gte IE 9]
        <style type="text/css">
        .gradient {
        filter: none;
        }
        </style>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/compressed/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/compressed/images/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body>
<div class="full-container">
    <header class="top">
        <div class="container">
            <?php include (TEMPLATEPATH . '/section-social-and-links.php'); ?>
        </div>
    </header>
    <div class="menu-button-wrapper">
        <div class="menu-button"></div>
    </div>
    <header class="sub-header">
        <div class="container">
            <div class="col-2">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/compressed/images/logo.svg" alt="logo"></a>
                </div>
            </div>
            <div class="col-2">
                <a href="<?php echo esc_url( home_url('')); ?>/subscribe/" class="button">Subscribe</a>
            </div>
        </div>
    </header>
    <header class="menu-header">
        <div class="container">
            <div class="full-width">
                <div class="ad-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/compressed/images/advertise.jpg" alt="">
                </div>
            </div>
            <div class="full-width">
                <div class="menu-wrapper desktop-menu">
                    <nav>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </nav>
                    <div class="search-wrapper">
                        <button type="button" class="search">
                            <i class="fa fa-search"></i>
                            <span>Search</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="full-width top-search-form-wrapper">
                <form action="" class="row search-form">
                    <input type="text" value="" name="s" id="s" placeholder="Enter your search term" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Responsive Menu -->
            <div class="menu-wrapper responsive-menu">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </nav>
                <div class="search-wrapper">
                    <form action="" class="row search-form">
                        <input type="text" value="" name="s" id="s" placeholder="Enter your search term" />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div> <!-- end of responsive-menu -->
        </div>
    </header>