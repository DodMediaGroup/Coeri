<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width"/>

    <meta name="application-name" content="Constructora Coeri" />
    <meta name="description" content="<?php echo CHtml::encode($this->pageDescription); ?>" />
    <meta name="keywords" content="Mandala, Edificios, Apartamentos, Edificios Duitama, Busco Apartamento" />
    <meta name="robots" content="index, follow" />

    <meta name="author" content="Coeri" />

    <meta property="og:title" content="<?php echo CHtml::encode($this->pageTitle); ?>">
    <meta property="og:image" content="<?php echo Yii::app()->createAbsoluteUrl($this->tagImage); ?>">
    <meta property="og:description" content="<?php echo CHtml::encode($this->pageDescription); ?>">
      
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon"/>

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/normalize.css" rel="stylesheet"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/flexboxgrid.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/fractionslider/fractionslider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.min.js"></script>
</head>

<body>
	<section id="head" class="limiter-container">
      <?php echo $content; ?>
    </section>

	  <div class="modal__loading"></div>
    <div class="message__popup">
      <div class="row middle-xs">
        <div class="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png" alt="MANDALA"/></div>
        <div class="message__content">
          <h3 class="message__title">Notificación Sistema</h3>
          <p class="message__text">Su mensaje se a enviado correctamente</p>
        </div>
      </div>
    </div>

	
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/fractionslider/jquery.fractionslider.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/animatescroll.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/vivus.js"></script>


    <?php
        $message = Yii::app()->user->getFlash('msj');
        if($message != ""){ ?>
            <script type="text/javascript">
                $.showMessage('<?php echo $message; ?>');
            </script>
        <?php }
    ?>
</body>
</html>
