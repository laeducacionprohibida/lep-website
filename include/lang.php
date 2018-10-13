<?php

session_start();

if ( !isset( $_SESSION["origURL"] ) )
    $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];

$query = parse_url($_SESSION["origURL"], PHP_URL_QUERY);
parse_str($query, $params);

$_SESSION["URL"] = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$query = parse_url($_SESSION["URL"], PHP_URL_QUERY);
parse_str($query, $params2);

if (!isset($params2["l"])) {
  if ( !isset( $_SESSION["lang"] ) ) {
    if (isset($params["l"])) {
      $_SESSION["lang"] = $params["l"];
      if ($_SERVER['REQUEST_URI'] == '/') {
        header('Location: http://' . $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'] . '?l=' . $_SESSION["lang"]);
      } else {
        header('Location: http://' . $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'] . '&l=' . $_SESSION["lang"]);
      }

    }
  }
}

global $idioma;
global $lang;

$lang_default = 'es'; // Español por defecto
if (!$_GET['l']) {
  if ($_SERVER['REQUEST_URI'] == '/') {
    header('Location: http://' . $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'] . '?l=' . $lang_default);
  } else {
    header('Location: http://' . $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'] . '&l=' . $lang_default);
  }
} else {
  $lang = $_GET['l'];
}
switch ($lang) {
  case 'en':
    $idioma = 'en_US.UTF-8';
    break;
  case 'pt':
    $idioma = 'pt_PT.UTF-8';
    break;
  case 'es':
    $idioma = 'es_AR.UTF-8';
    break;
  default:
    $lang = 'es';
    $idioma = 'es_AR.UTF-8';
    break;
}

// Define el idioma
putenv("LANG=$idioma");
setlocale(LC_ALL, $idioma);

// Define la ubicación de los ficheros de traducción
bindtextdomain("messages", "locale");
textdomain("messages");
bind_textdomain_codeset("messages", 'UTF-8');

?>
