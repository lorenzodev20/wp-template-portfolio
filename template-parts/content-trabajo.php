<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Portfolio
 */

?>
<style>
.menu nav, div#contenedor-titulo-flex{
    display: none;
}
header {
    background: linear-gradient(rgba(84, 93, 220, .9), rgba(96,171,245,.9)), url(../img/ordenador.jpg);
    height: auto;
    background-size: cover;
}
</style>
<!--Container del Post-->
<div class="contenedor">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
        <?php //my_portfolio_post_thumbnail(); ?>
        <div class="contenedor-post">
            <div class="texto">
                <?php the_content(); ?>
            </div>
        </div>
        <!--Edit Post-->
        <?php if ( get_edit_post_link() ) : ?>
        <?php
            edit_post_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Edit <span class="screen-reader-text">%s</span>', 'my-portfolio' ),
                        array(
                            'span' => array(
                                'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
        <?php endif; ?>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>