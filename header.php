<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inde_2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'inde2016' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div id="context-switch">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div class="row">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-block btn-success">INDE</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-block btn-success">PLAY</button>
                        </div>
                        <div class="col-md-5">
                            <button type="button" class="btn btn-block btn-success">RADIO</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    EMPTY SPACE FOR STUFF
                </div>
            </div>
        </div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'section group' ) ); ?>
                </div>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->