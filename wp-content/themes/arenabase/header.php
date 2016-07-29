<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<?php the_field('custom_scripts_styles','option'); the_field('scripts_in_head','option'); ?>
</head>

<body <?php body_class(); ?>>
	<?php the_field('body_scripts','option'); ?>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
    <nav class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="site-navigation-inner col-sm-12">
                    <div class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Your site title as branding in the menu -->
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

                                <?php $logo = get_field('logo','option');
                                    if ($logo){ ?>
																			<img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo( 'name' ); ?>" />
                                <?php } else { bloginfo( 'name' ); } ?>

                            </a>
                        </div>

                        <!-- The WordPress Menu goes here -->
                        <?php wp_nav_menu(
                            array(
                                'theme_location' 	=> 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse navbar-right',
                                'menu_class' 		=> 'nav navbar-nav',
                                'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                                'menu_id'			=> 'main-menu',
                                'walker' 			=> new wp_bootstrap_navwalker()
                            )
                        ); ?>

                    </div><!-- .navbar -->
                </div>
            </div>
        </div><!-- .container -->
    </nav><!-- .site-navigation -->
</header><!-- #masthead -->



<div class="main-content">
	<?php do_action('container_wrap_before'); ?>
