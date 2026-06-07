<?php get_header(); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php bloginfo('template_directory'); ?>/images/rackofribs.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1><?php _e( "Sven's Barbecue Sauce.", 'wp-bootstrap' ); ?></h1>
              <p><?php _e( "Sweet and Thick, Just Like Aunt Hilda.", 'wp-bootstrap' ); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_directory'); ?>/images/bbq-chicken.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php _e( 'Saucy.', 'wp-bootstrap' ); ?></h1>
              <p><?php _e( "Grill i dag håller doktorn borta.", 'wp-bootstrap' ); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php bloginfo('template_directory'); ?>/images/wingsongrill.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php _e( 'Barbecue.', 'wp-bootstrap' ); ?></h1>
              <p><?php _e( "Screw Shrimp, Put Another Full Rack of Ribs on the Barbie!", 'wp-bootstrap' ); ?></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="http://placehold.it/140x140" alt="Generic placeholder image">
          <h2><?php _e( 'Heading', 'wp-bootstrap' ); ?></h2>
          <p><?php _e( 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', 'wp-bootstrap' ); ?></p>
          <p><a class="btn btn-default" href="#" role="button"><?php _e( 'View details', 'wp-bootstrap' ); ?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="http://placehold.it/140x140" alt="Generic placeholder image">
          <h2><?php _e( 'Heading', 'wp-bootstrap' ); ?></h2>
          <p><?php _e( 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', 'wp-bootstrap' ); ?></p>
          <p><a class="btn btn-default" href="#" role="button"><?php _e( 'View details', 'wp-bootstrap' ); ?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
          <img class="img-circle" src="http://placehold.it/140x140" alt="Generic placeholder image">
          <h2><?php _e( 'Heading', 'wp-bootstrap' ); ?></h2>
          <p><?php _e( 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', 'wp-bootstrap' ); ?></p>
          <p><a class="btn btn-default" href="#" role="button"><?php _e( 'View details', 'wp-bootstrap' ); ?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php _e( 'First featurette heading.', 'wp-bootstrap' ); ?> <span class="text-muted"><?php _e( "It'll blow your mind.", 'wp-bootstrap' ); ?></span></h2>
          <p class="lead"><?php _e( 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'wp-bootstrap' ); ?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://placehold.it/500x500" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://placehold.it/500x500" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php _e( "Oh yeah, it's that good.", 'wp-bootstrap' ); ?> <span class="text-muted"><?php _e( 'See for yourself.', 'wp-bootstrap' ); ?></span></h2>
          <p class="lead"><?php _e( 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'wp-bootstrap' ); ?></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php _e( 'And lastly, this one.', 'wp-bootstrap' ); ?> <span class="text-muted"><?php _e( 'Checkmate.', 'wp-bootstrap' ); ?></span></h2>
          <p class="lead"><?php _e( 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'wp-bootstrap' ); ?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://placehold.it/500x500" alt="Generic placeholder image">
        </div>
      </div>

    
    
<?php get_footer(); ?>
