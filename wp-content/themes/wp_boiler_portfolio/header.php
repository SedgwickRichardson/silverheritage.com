<? get_template_part('partials/_head'); ?>
<body <?php body_class($class); ?> data-spy="scroll" data-target="#main-nav" data-offset="70">
	<!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->
<div id="toptop"></div>


  <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1 class="hidden-xs">Silver Heritage</h1>
        <img class="visible-xs" src="assets/img/silverheritage-logo.png" alt="silverheritage-logo" width="631" height="74" />
        <h2>Asia&rsquo;s Regional Gaming Operator</h2>
      </div>
      

        <nav class="collapse navbar-collapse hidden-xs" role="navigation" id="main-nav">
          <div class="container">
          <div class="col-md-8 col-md-offset-2 text-center">
          <a class="toptoplink" href="#toptop"><img src="/assets/img/silverheritage-logo.png" alt="silverheritage-logo" width="631" height="74" /></a>
    		  <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
          ?>   
          </div>
          </div>
        </nav>


<!--         <nav class="collapse navbar-collapse visible-xs" role="navigation" id="main-mobile-nav">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <p>Menu</p>
              </button>
            </div>
            <nav class="collapse navbar-collapse" role="navigation" id="main-mobile-nav">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
              endif;
            ?>   
            </nav>
          </div>

        </nav> -->


    </div>