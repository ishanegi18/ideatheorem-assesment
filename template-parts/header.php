<header>
  <nav class="navbar">
    <div class="container">
    <?php if ( get_theme_mod( 'logo_image' ) ) : ?>
      <div class="site-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
          <img src="<?php echo esc_url( get_theme_mod( 'logo_image' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        </a>
      </div>
    <?php endif; ?>
    <button class="navbar-toggler" type="button" aria-expanded="false">
      <span class="navbar-toggler-icon">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
          <rect y="20" width="100" height="15"></rect>
          <rect y="50" width="100" height="15"></rect>
          <rect y="80" width="100" height="15"></rect>
        </svg>
      </span>
    </button>
    <div class="navbar-collapse">
      <?php
        if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu',
            'container' => true,
          ) );
        }
      ?>
    </div>
    </div>
  </nav>
</header>
