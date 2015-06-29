<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'doantran';
	$connect = mysql_connect($host,$user,$pass);
	$select = mysql_select_db($db,$connect);
	$lang = mysql_query("SET NAMES 'utf8'");
?>