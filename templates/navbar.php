<div id="main-subnav">
  <div class="navbar container" role="banner">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <?php do_action('shoestrap_nav_top_left'); ?>
        <nav id="nav-main" class="nav-collapse" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
        </nav>
        <?php do_action('shoestrap_nav_top_right'); ?>
      </div>
    </div>
  </div>
</div>