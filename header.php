<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/estilos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/owl/owl.theme.default.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a id="whatsapp" href="https://api.whatsapp.com/send?phone=573023356659" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/whatsapp.png" alt=""></a>
<header>
    <div class="menu">
      <div class="contenedor">
	  	<!--Logo-->
        <p class="logo">
			<?php the_custom_logo(); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" > <?php bloginfo( 'name' ); ?>  </a>
		</p>
        <img src="<?php echo get_template_directory_uri() ?>/img/menu.png" class="menu-icon" alt="Menu">
        <nav>
			    <?php echo getMenu(); ?>
        </nav>
      </div>
    </div>
    <div class="contenedor cont-header" id="contenedor-titulo-flex">
      <div class="contenedor-titulo">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2> <?php bloginfo( 'description'); ?></h2>
        <a href="#mis-trabajos">VER MIS TRABAJOS</a>
      </div>
    </div>
  </header>
  <main>