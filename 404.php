<?php

/**
 * The template for displaying the 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ideatheorem
 * 
 * @author Isha Negi
 */

 ?>

<?php get_header(); ?>

<main id="main" class="site-main" role="main">

    <h1><?php esc_html_e( '404 - Page Not Found', 'ideatheorem' ); ?></h1>

    <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'ideatheorem' ); ?></p>

</main>

<?php get_footer(); ?>
