    <section id="contacto">
      <?php
          if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>
          <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>
          <?php
          } else{
          ?>
      <div class="contenedor">
        <h3>Contacto</h3>
        <form action="envio-formulario.php" method="post" enctype="multipart/form-data">
          <input type="text" placeholder="Nombre" name="nombre" required>
          <input type="email" placeholder="Email" name="email" required>
          <textarea placeholder="Mensaje" name="mensaje" required></textarea>
          <input type="submit" value="ENVIAR MENSAJE">
        </form>
        <?php } ?>
        <div class="contacto-info">
          <div class="mail"><img src="<?php echo get_template_directory_uri() ?>/img/mail-icon.png" alt="">solucionesinformaticas960@gmail.com</div>
          <div class="whatsapp"><img src="<?php echo get_template_directory_uri() ?>/img/whatsapp-icon.png" alt="">+573023356659</div>
        </div>
      </div>
    </section>