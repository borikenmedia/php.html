<?php

/* Minthread CMS v2 Release Under LGPL3 By dyewilliam */

function addhtml(){}

function gethtml(){}

function sorthtml(){}

function removehtml(){}

/* DOM Html Functions */

$body = "";

function addinfo(string $value = ""):string{
	return((string)$value);
}

function getinfo(string $_value = "VALUE"):string{
	$_html = addinfo($_value);
	return($_html);
}

function sortinfo(){}

function removeinfo(){}

/* DOM Html file information */

function addstring():string{
	$_string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	return((string)$_string);
}

function getstring(){}

function sortstring():string{
	$_length = rand(5,20);
	$_string = substr(str_shuffle(addstring()), 0, $_length);
	return((string)$_string);
}

function removestring(){}

/* DOM Html file infor serialization */

?>
