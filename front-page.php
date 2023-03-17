<?php

/**
 * The template for displaying the front page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ideatheorem
 * 
 * @author Isha Negi
 */

namespace ideatheroem;


get_header();
?>
<main class="site-main <?php if (is_front_page()) : ?> is-front-page <?php endif; ?>">


  <div>


    <?php the_content(); ?>

  </div>


</main>


<?php get_footer();
?>