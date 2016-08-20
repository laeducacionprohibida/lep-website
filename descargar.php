<?php
error_reporting(E_ALL);
ini_set('display_errors', False);
  include('include/lang.php');

	$fuente  = $_GET['fuente'];
  $falla = false;

	//$torrent = '1';
	$backlink = "#";
	switch ($fuente) {
		case 5: // USA - DreamHost
			$lugar = "NorteamÃ©rica 3";
			$webmaster = "Luis Peniche";
			$url = "educacionprohibida.educatecnia.com";
			break;
		case 16: // CDN ICCBroadcast.com
			$lugar = "Global 1";
			$webmaster = "CDN ICCBroadcast.com";
			$url = "download.educacionprohibida.iccbroadcast.com";
			break;
    case 17: // Angel Light
      $lugar = "Grecia 1";
      $webmaster = "angellight";
      $url = "funes.reevo.xyz/lep";
      $backlink = "http://www.angellight.com";
      break;
		default:
			$error = "El servidor fuente no existe.";
			$falla = true;
			break;
	}

	$tipo = $_GET['tipo'];
	switch ($tipo) {
		case 'completa':
			$tipo_desc = "Completa - Duración: 02:25:18";
			break;
		case 'sala':
			$tipo_desc = "Versión de sala - Duración: 02:00:31";
			break;
		default:
			$error = "Error en el tipo de versión.";
			$falla = true;
			break;
	}

  $idioma = $_GET['idioma'];
	$calidad = $_GET['calidad'];
	switch ($calidad) {
		case '1080p':
			$calidad_desc = "Alta Definición / HD (1920x1080)<br/><small>Codecs: H264 - MPEG4 AVC / MPEG AAC Audio</small>";
      if ($idioma == 'pt') {
        $calidad_tam = "3.1Gb (3277370432 Bytes)<br/><small>Hash MD5: e429511e900347bc86955b172c1a8157</small>";
      } else {
        $calidad_tam = "4.3Gb (4580116760 Bytes)<br/><small>Hash MD5: a1d6211f1dd048df68354af2a4a88f29</small>";
      }
			break;
		case '480p':
			$calidad_desc = "Definición Estándar / SD (854x480)<br/><small>Codecs: H264 - MPEG4 AVC / MPEG AAC Audio</small>";
      if ($idioma == 'pt') {
        $calidad_tam = "1.1Gb (1178068996 Bytes)<br/><small>Hash MD5: 62b464ee0d02f0b5d6dd0e539e01ea5a</small>";
      } else {
			  $calidad_tam = "1.4Gb (1496618065 Bytes)<br/><small>Hash MD5: 8be0b308573c877c4b29b65625e1d060</small>";
      }
			break;
		case '272p':
			$calidad_desc = "Portátil (480x272)<br/><small>Codecs: </small>";
      if ($idioma == 'pt') {
        $calidad_tam = "254Mb (265509374 Bytes)<br/><small>Hash MD5: 06d86bbe3a74bbf3d0dba56d6c6f2e78</small>";
      } else {
        $calidad_tam = "691Mb (723645986 Bytes)<br/><small>Hash MD5: db51be0e2420e56e6dffeea4b9d442e0</small>";
      }
			break;
		case 'dvd':
			$calidad_desc = "DVD (720x480)<br/><small>Codecs: </small>";
      if ($idioma == 'pt') {
			  $calidad_tam = "4.4Gb (4681564160 Bytes)<br/><small>Hash MD5: db51be0e2420e56e6dffeea4b9d442e0</small>";
      } else {
			  $calidad_tam = "4.4Gb (4681564160 Bytes)<br/><small>Hash MD5: db51be0e2420e56e6dffeea4b9d442e0</small>";
      }
			break;
		default:
			$error = "Error en el tipo de calidad.";
			$falla = true;
			break;
	}

	$formato = $_GET['formato'];

  switch ($idioma) {
		case 'es':
      // Descarga version original con audio español en caso de que no se especifica idioma
      $url_final = $url . '/' . $tipo . '/la_educacion_prohibida-' . $tipo . '-' . $calidad . '.' . $formato;
			break;
		case 'pt':
      $url_final = $url . '/' . $tipo . '/la_educacion_prohibida-' . $tipo . '-' . $calidad . '.' . $idioma . '.' . $formato;
			break;
		default:
      // Descarga version original con audio español en caso de que no se especifica idioma
      $url_final = $url . '/' . $tipo . '/la_educacion_prohibida-' . $tipo . '-' . $calidad . '.' . $formato;
			break;
	}


  if ($idioma) {
  } else {
  }
	$dd = $_GET['dd'];

	if ($dd) {
	  header('Location: http://'.$url_final);
	}

?>


<!DOCTYPE html>
<html lang="<?php echo $idioma;?>">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo _('La Educación Prohibida | Un proyecto audiovisual para transformar la educación');?></title>

<style>
body {
	background: url("/img/cab_fondo2.jpg") no-repeat scroll center 0 #1A1A1A;
	color: white;
	font-family: 'Oxygen';
	margin: 0 auto;
	max-width: 500px;
}

#contenido {
	max-width: 500px;
  margin: 0 auto;
  position: relative;
  display: block;
  float: left;
}

h2 {
		text-shadow: 1px 1px 1px #000;
		font-family: 'Yanone Kaffeesatz', sans-serif;
		font-size: 32pt;
		clear: both;
}

ul li {
	margin-bottom: 15px;
}

a {
	color: #44AA00;
}
#logo {
	background: url(/img/logo.<?php echo $lang;?>.png) no-repeat;
	width: 362px;
	height:107px;
  margin: 0 auto;
  display: block;
}

ul {
  display: block;
  float: left;
  margin: 2em 0;
}

#boton {
	padding: 5px;
	font-size: 17pt;
	text-align: center;
	background: #44aa00;
	box-shadow: 0 0 5px #66ff00;
	font-family: 'Yanone Kaffeesatz', sans-serif;
	color: black;
	width: 270px;
	text-decoration: none;
	border: 1px solid #66ff00;
/*
	text-shadow: 1px 1px 1px #000000;
*/
  display: block;
	clear: both;
}

#boton:hover {
	border: 1px solid #c9ff6e;
	box-shadow: 0 0 9px #c9ff6e;
	background: #66ff00;
}

#cab_logo {
    background: url("img/logo.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 107px;
    margin: 2em 0 1em 4em;
    width: 362px;
}#cab_logo {
    background: url("img/logo.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 107px;
    margin: 2em 0 1em 4em;
    width: 362px;
}#cab_logo {
    background: url("img/logo.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 107px;
    margin: 2em 0 1em 4em;
    width: 362px;
}
</style>
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,200">

</head>
<body>
<div id="contenido">
	<a href="/" id="logo"></a>

<ul>
	<li><b><?php echo _('Servidor');?>:</b> <?php echo $lugar;?> (<?php echo _('cortesía de');?> <b><a href="<?php echo $backlink;?>"><?php echo $webmaster;?></a></b>)</li>
	<li><b><?php echo _('Versión');?>:</b> <?php echo $tipo_desc;?></li>
	<li><b><?php echo _('Calidad');?>:</b> <?php echo $calidad_desc;?></li>
	<li><b><?php echo _('Tamaño');?>:</b> <?php echo $calidad_tam;?></li>
	<li><b><?php echo _('Licencia');?>:</b> 	<?php echo _('Se permite y alienta la copia, modificación y redistribución de todos los contenidos. <a href="/?p=legales.php">Mas información...');?></a></li>
</ul>


	<?php

			if (!$falla) {
				echo '<center><a href="/descargar.php?fuente='.$fuente.'&tipo='.$tipo.'&calidad='.$calidad.'&formato='.$formato.'&idioma='.$idioma.'&dd=1" id="boton">';
        echo _('Descargar');
        echo '</a></center>';

				echo '<br/><br/><br/>';
				echo '<span style="font-size: 9pt; text-align:center; float: left; width: 100%;">¿Tienes un servidor web donde alojar la película? <a href="/?p=contacto">¡Escrí­benos!</a></span>';
			} else {
				echo '<center><b>'.$error.'</b></center>';
			};
      ?>






</div>
</body>

</html>

<?php


?>
