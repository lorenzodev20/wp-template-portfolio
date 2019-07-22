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
#contenedor-titulo-flex {
	display: none;
}
header{
	height: auto;
}
nav{
	display: none;
}
</style>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="contenedor">
			<?php the_title( '<h3>', '</h3>' );?>
			<div class="contenedor-post">
				<div class="texto">
            	<p><?php the_content(); ?></p>
          	</div>
        </div>
</article>
