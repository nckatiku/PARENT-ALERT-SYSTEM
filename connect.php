
<?php


    $host='localhost';
	$db='liitle_data';
	$user='root';
	$pass='';
	


$link = mysql_connect($host,$user,$pass);
if (!$link) {
    die(mysql_error());
}

// make foo the current db

$db_selected = mysql_select_db('liitle_data', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
else
{ 
    echo " ";
     
 
}
?>