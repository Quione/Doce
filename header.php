<!DOCTYPE html>
    <html>
        <head>
            <title>Tema Personalizado</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
						<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <link rel="stylesheet"
                href="<?php bloginfo('template_url'); ?>/style.css">
        </head>
        <body>
        
<?php        
    wp_nav_menu( array(
	'theme_location'  => 'primary',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'bs-example-navbar-collapse-1',
	'menu_class'      => 'navbar-nav mr-auto',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );
?>

<nav class="navbar navbar-light bg-light" id="navtop">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.2/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    <i href="https://pt-br.facebook.com/login/" class="fab fa-facebook-square" > </i> <i class="fab fa-instagram"></i> <i class="fab fa-twitter"></i>
  </a>
</nav>
	

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation" id="navinferior">
  <div class="container">
 
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button> 
	<a class="navbar-brand" href="http://127.0.0.1/wordpress/"><img src="<?php bloginfo('template_url'); ?>/logo.png" width="107" height="90"></a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>

</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_url'); ?>/balinhas2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url'); ?>/docin2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url'); ?>/docinn2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            <div class="container">