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
get_template_part('template-parts/content','servicios'); ?>
<section id="mis-trabajos">
    <!--Acá ira el carousel-->
    <div class="contenedor">
        <h3>Mis Trabajos</h3>
        <div class="owl-carousel owl-theme">
<?php if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();
        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', 'trabajo' );
    endwhile;
else :
    echo "No hay trabajos cargados en la página";
endif; ?>
</div>
</div>
</section>
<?php 
get_template_part('template-parts/content','por-que-trabajar');
get_template_part('template-parts/content','que-esperas');
get_template_part('template-parts/content','contacto');
?>
<!--Sacada de underscore, queda pendient la programacion de blog y proyectos-->
<?php 
get_footer();
