<?php

/**
 * Template for displaying the footer
 *
 * Description for template.
 *
 * @Author: Isha Negi
 * @Date: 2020-05-11 13:33:49
 * @Last Modified by:   Isha Negi
 * @Last Modified time: 2022-09-07 11:57:45
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package starter-theme
 */

namespace Air_Light;

?>

</div><!-- #content -->

<footer role="contentinfo ">
    <div>

        <div class="copyright-footer">
            <a href="#" aria-label="ideatheorem website" target="_blank">
                <img class="w-[200px]" alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>">
            </a>
        </div>

    </div>
    <div class="container mx-auto">Copyright © <?php echo date("Y"); ?>.
            </div>
</footer>


</div><!-- #page -->

<?php wp_footer(); ?>


</body>

</html>