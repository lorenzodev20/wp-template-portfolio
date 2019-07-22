/* //API Rest de Wordpress
$( document ).ready(function() {
  //API Rest
getPosts:{
        var rootURL = 'http://localhost/miweb/wp-json/wp/v2';
            $.ajax({
                type: 'GET',
                url: rootURL + '/trabajo',
                dataType: 'json',
                success: function(data){
                
                $.each(data, function(index, value) {
                //alert(JSON.stringify(data));
                console.log(JSON.stringify(data));
                    console.log(value.featured_image);
                    $('.owl-carousel').append('<div class="owl-carousel owl-theme"><div class="item"><a href="#"><img id="image-job" src="<?php echo get_template_directory_uri() ?>/img/sassy.jpg">'+
                        '<div class="title-job">'+value.title.rendered +'</div></a></div></div>');
                    });
                },
                error: function(error){
                console.log(error);
                }
            });
    }

}); */
