<?php

/* Minthread CMS v2 Release Under LGPL3 By dyewilliam */

$style = <<<OEM
*{margin: 0; padding: 0;}

Body{
	margin: 0;
	padding: 0;
	background: #fff;
	font: normal .85em Lucida Sans Unicode, sans-serif;
	color: #000;
}

div#wrapper{
	margin: 1em Auto;
	padding: 1%;
	width: 68%;
	background: #f1f1f1;
	border: solid .111em #ddd;
}

OEM;

$content = "<h1>Hello World, It Works!</h1><p>Some of the software documentation Like Terms of service &amp; Privacy Policy</p>";

function create_html(&$style, &$content){
	$value = ["title"=>"Boriken Media Subs","Guest"=>"Username"];
	$html = <<<OEM
<!DOCTYPE html Public>
<html lang="En-US">
<head>
<title>{$value["title"]}</title>
<meta name="description" content="Web design and development" />
<meta name="keywords" content="Tutorials, Scripts, Manuals" />
<meta name="aucthor" content="dyewilliam" />
<meta charset="utf-8856" />
<style type="text/css">
<!--
{$style}
//-->
</style>
</head>
<body>
	<div id="wrapper">
		{$content}
	</div>
</body>
</html>
OEM;
	return($html);
}

?>
