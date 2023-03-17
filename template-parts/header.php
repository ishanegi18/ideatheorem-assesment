<header>
<?php if ( get_theme_mod( 'logo_image' ) ) : ?>
  <div class="site-logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo esc_url( get_theme_mod( 'logo_image' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    </a>
  </div>
<?php endif; ?>





<?php
if ( has_nav_menu( 'primary' ) ) {
  wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_class' => 'primary-menu',
    'container' => true,
  ) );
}
?>

	</header>