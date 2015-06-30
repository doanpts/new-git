<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'inews';
	$connect = mysql_connect($host,$user,$pass);
	$select = mysql_select_db($db,$connect);
	$lang = mysql_query("SET NAMES 'utf8'");
	// nothing to do
	echo 'hello!';
?>