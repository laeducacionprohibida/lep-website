<?php
error_reporting(E_ALL);
ini_set('display_errors', False);
// Si no se define el idioma en la URL, se intenta usar el idioma del navegador

global $url;
$url="http://" . $_SERVER['SERVER_NAME'];
include('include/lang.php');
include('tpl/head.php');

if (!$_GET['p']) { ?>

  <body class='home <?php echo $lang; ?>'>

  <?php  include('tpl/header.php');?>

  <div id="contenedor">
    <div id="contenido" class="cont-portada">
      <div id="contenido-pelicula">
        <div id="contenido-pelicula-player">
          <?php if ( $lang == "pt" ) { ?>
            <iframe width="560" height="349" src="https://www.youtube.com/embed/OTerSwwxR9Y" frameborder="0" allowfullscreen></iframe>
          <?php } ?>
          <?php if ( $lang == "es" ) { ?>
            <iframe width="560" height="349" src="https://www.youtube.com/embed/ZkbRR_iQ7EQ?rel=0" frameborder="0" allowfullscreen></iframe>
          <?php } ?>
        </div>

        <div class='tabbed_content'>
          <div class='tabs'>
            <div class='moving_bg'>
              &nbsp;
            </div>
            <span id="tab-descargar" class='tab_item'>
              <?php echo _('Descargar');?>
            </span>
            <span id="tab-colaborar"class='tab_item'>
              <?php echo _('Colaborar');?>
            </span>
            <!-- <span id="tab-difundir"class='tab_item'>
              Difundir
            </span> -->
          </div>

          <div class='slide_content'>
            <div class='tabslider'>
              <div class='tab-content'>
                <div class="tab-content-col">
                  <h3><?php echo _('Película');?></h3>
                  <ul class="lista-descargas">
                    <li id="descarga-sd"><a class="lbp-inline-link-6" href="#"><?php echo _('Definición estándar- SD');?></a><br/><small>(854x480 / 1.4 Gb)</small></li>
                    <li id="descarga-movil"><a class="lbp-inline-link-7" href="#"><?php echo _('Versión móvil');?></a><br/><small>(480x272 / 691 Mb)</small></li>
                    <li id="descarga-hd"><a class="lbp-inline-link-5" href="#"><?php echo _('Alta definición - HD');?></a><br/><small>(1920x1080 / 4.4 Gb)</small></li>
                  </ul>
                  <br/>

                  <h3><a style="font-size:8pt;" href="/?p=descargas"><?php echo _('Mas opciones');?> »</a></h3>
                  <h3><?php echo _('Subtítulos');?></h3>
                    <?php include('include/subs.php'); ?>
                </div>

              <div class="tab-content-col">
                  <h3><?php echo _('Trailer');?></h3>
                  <h3 style="font-size:8pt;"><?php echo _('Ver Online');?></h3>
                  <ul>
                    <?php if ( $lang == "pt" ) { ?>
                      <li><a target="_blank" href="https://www.youtube.com/watch?v=OTerSwwxR9Y">YouTube</a></li>
                    <?php } ?>
                    <?php if ( $lang == "es" ) { ?>
                      <li><a target="_blank" href="http://www.youtube.com/watch?v=-1Y9OqSJKCc">YouTube</a></li>
                      <li><a target="_blank" href="https://vimeo.com/46162690">Vimeo</a></li>
                    <?php } ?>
                  </ul>

                  <!-- <h3 style="font-size:8pt;"><?php echo _('Descargar');?></h3>
                  <ul>
                    <li><a href="/datos/pelicula/trailer/trailer-hd.mp4">HD MP4</a> <small>(1280x720 / 100MB)</small></li>
                    <li><a href="/datos/pelicula/trailer/trailer-sd.mp4">SD MP4</a> <small>(640x360 / 65.7MB)</small></li>
                  </ul> -->
                </div>
              </div>

              <div class='tab-content'>
                <div class="tab-content-col">
                  <h3><?php echo _('Hosting');?></h3>
                  <?php echo _('<p>Puedes colaborar alojando copias de las diferentes versiones de la película en tu servidor web. Esto nos permitirá contar con mas opciones cuando alguien quiera descargar la película. <a href="/?p=contacto">Contáctanos...</a></p>');?>
                </div>

		      
		      
                <!-- <div class="tab-content-col">
                  <h3><?php echo _('Aporte económico');?></h3>
                  <?php echo _('<p>Hemos terminado la película y ya está al alcance de todo el mundo sin barreras económicas. Tenemos otros proyectos en marcha, como <a target="_blank" href="http://reevo.org">Reevo</a>, la red de educación alternativa mas grande a Iberoamérica. <b>Puedes apoyarnos <a href="https://donar.reevo.org/form.php?donar=1">haciendote miembro o haciendo una donación</a></b>.');?>
                </div> -->


              </div>
            </div>




          </div>
        </div>
      </div>
      <div id='portada-resumen'>
        <?php echo _('Más de <a href="/?p=entrevistas">90 entrevistas</a> a educadores en un recorrido por 8 países de Iberoamérica visitando <a href="/?p=experiencias">45 experiencias educativas</a>.');?>
        <div class="linedivider"></div>
        <?php echo _('Un proyecto <a href="/?p=financiacion">financiado colectivamente</a> por 704 coproductores a través de internet.');?>
        <div class="linedivider"></div>
        <?php echo _('Una producción de <a href="/?p=legales">distribución libre</a>, publicada originalmente en español con más de 900 proyecciones independientes</a> y más de 14.000.000 de <a href="http://youtu.be/-1Y9OqSJKCc">reproducciones</a> en la red.');?>
        <div class="linedivider"></div>
        <?php echo _('Más que una película documental, <a href="/?p=pelicula">La Educación Prohibida</a> es un obra abierta pensada para la transformación social.');?>
      </div>
      <!-- <a href="http://map.reevo.org" target="_blank" id="contenido-encuesta" style="visibility: ;"><p style="font-weight:bold; font-size: 150%; margin:7px;">MAPEO COLECTIVO DE EDUCACIÓN ALTERNATIVA</p>
      <p style="font-weight:light; font-size: 87%; margin: 0px">Agrega tu experiencia educativa al Mapa</p></a> -->
    </div>
  <?php  include('tpl/footer.php');?>
  </div>
  <?php include('include/popup.php') ?>

  </div>
  </body>
  </html>
<!-- Fin de HOME -->

<?php } else {

$page = $_GET['p']; ?>

<body class="<?php echo $lang; ?>">

<?php  include('tpl/header.php');?>

<div id="contenedor">
  <div id="contenido">
    <h2 class="encabezado"><?php echo _('titulo-'.$page);?></h2>

    <div class="col-total-contenido">
      <?php include('locale/'.$lang.'/'.$page.'.php');?>
		</div>


  </div>
</div>
<?php  include('tpl/footer.php');?>

</body>
</html>



<?php } ?>
