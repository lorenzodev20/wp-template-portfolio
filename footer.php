<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Portfolio
 */

?>
  </main>
  <footer>
    <div class="contenedor">
      <div class="redes">
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/twitter.png" alt="imagen de twitter"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/medium.png" alt="imagen de facebook"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/github.png" alt="imagen de facebook"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/linkedin.png" alt="imagen de facebook"></a>
      </div>
      <div class="parrafo">
        <p>© 2019 Lorenzo Rojo | Desarrollador Web Colombia. Todos los derechos reservados</p>
      </div>
    </div>
  </footer>
<script src="<?php echo get_template_directory_uri() ?>/owl/owl.carousel.min.js"></script>
<script>
//funcion Carousel
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  }
})
</script>
<!--Funcion JQuery para el Menú-->
<script>
$(document).ready(function(){

$(window).scroll(function(){
  scroll = $(window).scrollTop();
  if (scroll > 100) {
    //cuando el scrol va hacia abajo
    $('.menu').css({"position":"fixed"});
    $('.menu').css({"width":"100%"});
    $('.menu').css({"top":"0"});
    $('.menu').css({"background":"#fff"});
    $('.menu a').css({"color":"#000"});
    $('.logo').css({"color":"#000"});
    $('.menu').css({"box-shadow":"rgba(0, 0, 0, 0.22) 6px 1px 1px"});
    $('.menu').css({"z-index":"100"});
  } else {
    //Cuando el scroll va hacia arriba
    $('.menu').css({"position":"relative"});
    $('.menu').css({"background":"transparent"});
    $('.menu').css({"box-shadow":"0 0 0"});
    $('.menu a').css({"color":"#fff"});
    $('.logo').css({"color":"#fff"});
  }
})
//Funcion para activar el menu en responsive
$('.menu-icon').click(function(){
  $('header nav').slideToggle();
})
})
</script>
<?php wp_footer(); ?>
</body>
</html>
