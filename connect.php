<?php
	$host='localhost';
	$db='liitle_data';
	$user='root';
	$pass='';
	
	if(!@mysql_connect($host,$user,$pass) || !@mysql_select_db($db)){
		die(mysql_error());
	}
	
	
   
?>