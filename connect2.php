<?php


	$host='localhost';
	$db='littlxpu_liitle_data';
	$user='littlxpu_rjv';
	$pass='rajiv834';
	
	if(!@mysql_connect($host,$user,$pass) || !@mysql_select_db($db)){
		die(mysql_error());
	}
	
	
   
?>