<?php

/**
 * The template for displaying front page
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Isha Negi
 * @Last Modified time: 2022-05-25 20:18:40
 *
 * @package ideatheorem
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Air_Light;


get_header();
?>
<main class="site-main <?php if (is_front_page()) : ?> is-front-page <?php endif; ?>">


  <div>


    <?php the_content(); ?>

  </div>


</main>


<?php get_footer();
?>