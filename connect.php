<?php
	$host='localhost';
	$db='student';
	$user='root';
	$pass='';
	
	if(!@mysql_connect($host,$user,$pass) || !@mysql_select_db($db)){
		die(mysql_error());
	}
	
	
   
?>