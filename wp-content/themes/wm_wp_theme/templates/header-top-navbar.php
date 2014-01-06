<!-- 
  NAV Bar for site...
  Should include the wm logo and two tiered link system
-->
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/">
        <img src="http://www.waltzingmechanics.org/img/assets/WMlogo.png"> <!-- LOGO - Absolute path... will need to be altered. -->
      </a>
    </div>

    <nav class="collapse navbar-collapse row" role="navigation">
      <div class="col-md-8 col-md-offset-1">
        <div class="row">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', ));
            endif;
          ?>
        </div> 
        <hr/>
        <div class="row">
          <h4 class="current_performance pull-left">Current Performance</h4>
          <?php
            if (has_nav_menu('current_performances')):
              wp_nav_menu(array('theme_location' => 'current_performances', 'menu_class' => 'nav navbar-nav',));
            endif;
          ?>
        </div>  
      </div>
    </nav>
  </div>
</header>
