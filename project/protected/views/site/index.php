<header class="content-header">
        <div class="row center-xs top-xs"><img src="images/logo__coeri.svg" class="col-xs-12 logo"></div>
        <nav class="menu">
          <ul>
            <li>
              <button onclick="$('#about').animatescroll({scrollSpeed:2000});">NOSOTROS</button>
            </li>
            <li> 
              <button onclick="$('#projects').animatescroll({scrollSpeed:2000});">PROYECTOS</button>
            </li>
            <li> 
              <button onclick="$('#contact').animatescroll({scrollSpeed:2000});">CONTACTO</button>
            </li>
          </ul>
        </nav>
      </header>
      <div class="row start-xs section-about">
        <div id="about" class="title col-xs-12 col-sm-5 row middle-xs end-xs"><img src="images/home.svg" class="to-svg">
          <h2>NOSOTROS</h2>
        </div>
        <div class="description-about row middle-xs">
          <h4 class="col-xs-9">SOMOS UNA EMPRESA BOYACENSE </br><strong>ENCARGADA DE GESTIONAR PROYECTOS INMOBILIARIOS </br></strong>CON CALIDAD Y ÉXITO</h4><img src="images/image-degrade.png" class="col-xs-3">
        </div>
        <div class="services row center-xs">
          <div class="title-service col-xs-12">
            <h3>/ / / <span>¿ Qué servicios prestamos ? </span>/ / /</h3>
          </div>
          <div class="items-service row center-xs">
            <div class="col-xs-12 col-sm-4"><img src="images/inmobiliaria.svg" class="to-svg">
              <h5>PROMOTORA </br><strong>INMOBILIARIA</strong></h5>
              <p>Elaboración, promoción, planeación y ejecución de proyectos de construcción inmobiliaria. </p>
            </div>
            <div class="col-xs-12 col-sm-4"><img src="images/consultoria.svg" class="to-svg">
              <h5> <strong>CONSULTORÍA</strong></h5>
              <p>Prestación de servicios de construcción, Interventoría y consultoría de obras civiles,  tanto en el sector público como privado.</p>
            </div>
            <div class="col-xs-12 col-sm-4"><img src="images/lupa.svg" class="to-svg">
              <h5> <strong>CONTROL DE CALIDAD</strong></h5>
              <p>Control de calidad en obras civiles, laboratorio de suelos, concretos y pavimentos.</p>
            </div>
          </div>
        </div>
        <div class="items-org row between-xs">
          <div class="item col-xs-12 col-sm-6">
            <div class="title-org row middle-xs"><img src="images/icon-check.svg" class="to-svg">
              <h4>MISIÓN</h4>
            </div>
            <p>Desarrollar proyectos inmobiliarios y de ingeniería, con soporte en métodos financieros innovadores, que faciliten la viabilidad financiera de los proyectos y permitan ofrecer alternativas de negocio llamativas para el público maximizando el rendimiento, a través de un excelente grupo de trabajo técnico y profesional</p>
          </div>
          <div class="item col-xs-12 col-sm-6">
            <div class="title-org row middle-xs"><img src="images/icon-check.svg" class="to-svg">
              <h4>VISIÓN</h4>
            </div>
            <p>En el 2018 ser una empresa reconocida competitivamente en el mercado, por su seriedad, excelencia, ética, servicio, crecimiento sostenible y por ofrecer llamativas alternativas de negocio, gracias al desarrollo de proyectos innovadores, con altos estándares de calidad y un desarrollo conjunto de métodos financieros, así como garantizando el acompañamiento técnico y profesional.</p>
          </div>
        </div>
        <div id="projects" class="title col-xs-12 col-sm-5 row middle-xs end-xs"><img src="images/projects.svg" class="to-svg">
          <h2>PROYECTOS</h2>
        </div>
        <div class="section-slide col-xs-12">
          <div class="slide-wrapper">
            <div class="responsive-container row center-xs">
              <div style="padding: 0 10%;" class="slider">
                <?php 
                foreach ($projects as $key => $project) {?>
                  
                <div class="slide">
                  <div data-in="fade" class="row center-xs middle-xs between-xs">
                    <div class="content-image col-xs-12 col-sm-6 center-xs"><img src="images/projects/250x250/<?php echo $project->image; ?>"></div>
                    <div class="col-xs-12 col-sm-6 text-slide">
                      <?php echo $project->text; ?>
                      <div class="link"><span>Conócelo </br></span><a target="_blank" href="<?php echo $project->link; ?>"><?php echo $project->title; ?></a></div>
                    </div>
                  </div>
                </div>
                <?php }
                 ?>
              </div>
            </div>
          </div>
        </div>
        <?php $this->renderPartial('//layouts/_footer'); ?>
      </div>
      <div class="btn-up"><a onclick="$('body').animatescroll();"> <img src="images/up-arrow.svg" class="to-svg"></a></div>