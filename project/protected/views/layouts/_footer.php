<footer id="contact" class="row center-xs middle-xs">
  <div class="logo-footer col-xs-12 col-sm-1"><img src="images/logo__coeri__2.svg"></div>
  <div class="contact-data col-xs-12 col-sm-4">
    <h5>CONTACTOS</h5>
    <?php $social = GeneralValue::model()->findByPk(2); ?>
    <p><?php echo $social->value; ?></br></p>
    <?php $social = GeneralValue::model()->findByPk(5); ?>
    <p><?php echo $social->value; ?></p>
    <p>Colombia</p>
    <div class="icon-social row start-xs">
    <?php $social = GeneralValue::model()->findByPk(3); ?>
    <a target="_blank" href="<?php echo $social->value; ?>" class="face"><img src="images/icon-facebook.svg" class="to-svg"></a>
    <?php $social = GeneralValue::model()->findByPk(4); ?>
    <a target="_blank" href="<?php echo $social->value; ?>" class="twitter"><img src="images/icon-twitter.svg" class="to-svg"></a></div>
  </div>
  <div class="form col-xs-12 col-sm-7">
  <?php $contact = GeneralValue::model()->findByPk(1); ?>
    <form class="row form__ajax" action="action="<?php echo $this->createUrl('/contact'); ?>" method="POST">
      <div class="col-xs-12 col-sm-4">
        <input type="text" name="name" required placeholder="Nombre">
        <input type="text" name="email" required placeholder="Correo">
      </div>
      <div class="col-xs-12 col-sm-8 row">
        <textarea name="message" required placeholder="Comentario"></textarea>
        <button type="submit">ENVIAR</button>
      </div>
    </form>
  </div>
</footer>