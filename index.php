<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Portfolio
 */

get_header();

get_template_part('template-parts/content','sobre-mi');
get_template_part('template-parts/content','servicios');
get_template_part('template-parts/content','mis-trabajos');
get_template_part('template-parts/content','por-que-trabajar');
get_template_part('template-parts/content','que-esperas');
get_template_part('template-parts/content','contacto');
?>
<!--Sacada de underscore, queda pendient la programacion de blog y proyectos-->
<?php 
get_footer();
