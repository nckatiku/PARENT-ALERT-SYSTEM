<?php


	$host='localhost';
	$db='littlxpu_liitle_data';
	$user='littlxpu_rjv';
	$pass='rajiv834';
	


$link = mysql_connect($host,$user,$pass);
if (!$link) {
    die(mysql_error());
}

// make foo the current db

$db_selected = mysql_select_db('littlxpu_liitle_data', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
else
{ 
    
     
 
}
?>