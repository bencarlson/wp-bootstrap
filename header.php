<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<link href="<?php bloginfo('template_directory'); ?>/carousel.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<?php
    /* 
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    wp_get_archives('type=monthly&format=link');
 
    wp_head();
?>
</head>
<body>
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="navbar-collapse collapse">
         
         
         <?php 
         wp_nav_menu( array(
        	'menu'              => 'primary',
        	'theme_location'    => 'primary-menu',
        	'depth'             => 2,
        	'container'         => 'div',
        	'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
        	'menu_class'        => 'nav navbar-nav',
        	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        	'walker'            => new wp_bootstrap_navwalker())
    	); 
		?>
          
            </div>
          </div>
        </div>

      </div>
    </div>
    
