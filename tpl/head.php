<!DOCTYPE html>
<html lang="<?php echo $idioma;?>">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo _('La Educación Prohibida | Un proyecto audiovisual para transformar la educación');?></title>

  <link rel="canonical" href="<?php echo $url;?>" />
  <link rel='shortlink' href='<?php echo $url;?>' />

	<link rel="shortcut icon" href="/img/favicon.ico" />
	<link rel="icon" type="image/vnd.microsoft.icon" href="/img/favicon.ico" />

	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,200' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="/css/estreno.css" />
  <link rel="stylesheet" type="text/css" media="all" href="/css/responsive.css" />
  <link rel='stylesheet' id='lightboxStyle-css'  href='/css/lightbox.css' type='text/css' media='screen' />
	<link rel="stylesheet" type="text/css" media="all" href="/css/slicknav.css" />

  <script type='text/javascript' src='/js/jquery.js'></script>
  <!-- <script type='text/javascript' src='/js/jquery-migrate.miechon.js'></script> -->

  <meta property="og:site_name" content="<?php echo _('La Educación Prohibida');?>" />
  <meta property="og:title" content="<?php echo _('La Educación Prohibida');?>" />
  <meta property="og:description" content="<?php echo _('Quienes hicimos la película te pedimos que nos ayudes a seguir impulsando Reevo, la Red de Educación Alternativa...');?>" />
  <meta property="og:image" content="<?php echo $url;?>/img/banner-fb.<?php echo $lang;?>.png" />

  <script src="/js/tabbedContent.js" type="text/javascript"></script>
  <script src="/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
	<script src="/js/jquery.slicknav.js" type="text/javascript"></script>

  <script type="text/javascript">
	  jQuery(function() {
	  jQuery(".newsticker-jcarousellite").jCarouselLite({
	          vertical: true,
	          visible: 4,
	          auto:1500,
	          speed:1000
	      });
				jQuery('#navegacion').slicknav({
					prependTo:'body',
				});

		});
  </script>

</head>
