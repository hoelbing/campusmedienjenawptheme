<?php
 // Header Top Navbar
?>
<header class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
      <div class="container">
          <a class="navbar-brand" href="<?php echo site_url(); ?>">
              <?php if (get_theme_mod( 'themeslug_logo' )) : ?>
              <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display ' ) ); ?>' width="25" height="25">
              <span class="blogname-title">
                  <?php echo trim(get_bloginfo( 'name' )); ?>
              </span>
              <?php else : ?>
              <div class="blogname-title-alone">
                  <?php echo trim(get_bloginfo( 'name' )); ?>
              </div>
              <?php endif; ?>
          </a>
          <button
              class="navbar-toggler navbar-toggler-left"
              type="button"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-12"
              aria-controls="bs-example-navbar-collapse-12"
              aria-expanded="false"
              aria-label="Toggle navigation" >
              <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Brand and toggle get grouped for better mobile display -->
          <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-11"> -->
              <?php
              wp_nav_menu( array(
                  'theme_location'    => 'primary-menu',
                  'depth'             => 4,
                  'container'         => div, //'div', false
                  'container_class'   => 'primary-header-menu collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-12',
                  'menu_class'        => 'navbar-nav mr-auto',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker())
              );
              ?>
          <form action="<?php echo home_url('/'); ?>" method="get" class="form-inline search-form my-2 my-lg-0">
              <input
                  type="search"
                  class="form-control search-field mr-sm-2"
                  placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                  aria-label="Search"
                  value="<?php the_search_query(); ?>"
                  name="s"
                  title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
              />
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                  <i class="fa fa-search-plus" aria-hidden="true"></i>
              </button>
          </form>
          <!-- </div> -->
      </div>
  </nav>
</header>
