<?php
/**
 * The header 
 *
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">


<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
<?php 
$url = get_stylesheet_directory_uri();
?>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:100,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href=<?php echo $url . "/css/slick/slick-theme.css?"; ?>/>
	<link rel="stylesheet" type="text/css" href=<?php echo $url . "/css/slick/custom.css?";?>/>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body   <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
<div class="container-fluid m-0 p-0">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark mr-auto ml-auto mt-0 mb-0 p-3 bg-primary fixed-top bottom-shadow">
            <div class="container w-75 mr-auto ml-auto">
                <a class="navbar-brand text-white" href="index.html">
                    <div class="logo"></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase font-weight-medium align-top">
                        <li class="nav-item mr-4 mt-3 mt-sm-3 mt-lg-0">
                            <a class="nav-link p-0" href="about-course.html">About</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link p-0" href="participants-corporate.html">Participants</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link p-0" href="media-audio-video.html">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0" href="index.html#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
