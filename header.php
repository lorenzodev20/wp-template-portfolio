<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no">
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
    <div class="contenedor" id="contenedor-titulo-flex">
      <div class="contenedor-titulo">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2> <?php bloginfo( 'description'); ?></h2>
        <a href="#">VER MIS TRABAJOS</a>
      </div>
    </div>
  </header>
  <main>