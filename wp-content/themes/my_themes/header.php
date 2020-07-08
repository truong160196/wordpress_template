<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="#">
                <?php /* Custom Logo */ echo thinkup_custom_logo(); ?>
            </a>
        </div>
        <?php if ( get_header_image() ) : ?>
            <div class="custom-header"><img src="<?php esc_url( header_image() ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt=""></div>
        <?php endif; // End header image check. ?>
        <?php if ( has_nav_menu( 'pre_header_menu' ) ) : ?>
            <?php wp_nav_menu( array( 'container_class' => 'header-links', 'container_id' => 'pre-header-links-inner', 'theme_location' => 'pre_header_menu' ) ); ?>
        <?php endif; ?>

        <?php /* Social Media Icons */ thinkup_input_socialmediaheader(); ?>
        <div class="nav-menu">
            <nav class="main-menu mobile-menu">
                <?php $walker = new thinkup_menudescription;
                wp_nav_menu(array( 'container' => false, 'theme_location'  => 'header_menu', 'walker' => new thinkup_menudescription() ) ); ?>
            </nav>
            <?php /* Header Search */ thinkup_input_headersearch(); ?>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<?php /* Add responsive header menu */ thinkup_input_responsivehtml1(); ?>

<?php /* Add responsive header menu */ thinkup_input_responsivehtml2(); ?>
<!-- Header End -->
<?php
wp_body_open();
?>