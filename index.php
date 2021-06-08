<?php
session_start();
error_reporting(E_PARSE|E_ERROR|E_NOTICE|E_WARNING);
date_default_timezone_set("America/Puerto_Rico");
header("Content-type: text/html; Charset: utf-8; Pragma: no-cache;");

/* Minthread CMS v2 Release Under LGPL3 By dyewilliam */

include("config.php");

include("librarie/html.php");
include("librarie/func.php");

$_ssid = sortstring();
/* Information Serialization _Helper Method */

$css = "";
$body = "<h1>Boriken Media Subs &minus; Web design and development studio</h1><p>Sortware Development and Web architechture [En-ES::{$_ssid}] Analisis y Diseño</p>";

$content = $body." ".getinfo("Some content filling");

$html = create_html($style,$content);

echo($html);

?>
