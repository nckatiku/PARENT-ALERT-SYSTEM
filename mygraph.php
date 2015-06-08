
<?php

include 'connect.php';

if(!$_SESSION['id'] == "vb")
{
header("Location:index.php");

}

  $p = 0;

  $q =" ";

  $year;

  $year = date("y");



 if(isset($_POST['year']))

 {
    $year = $_POST['year'];

 }

  if($year == "15")
  {

$q = "SELECT *  FROM `msg_count` WHERE `year_id` = '2015'";
}

else if($year == "16")
{

$q = "SELECT *  FROM `msg_count` WHERE `year_id` = '2016'";
}

else if($year == "17")
{

$q = "SELECT *  FROM `msg_count` WHERE `year_id` = '2017'";
}

else if($year == "18")
{

$q = "SELECT *  FROM `msg_count` WHERE `year_id` = '2018'";
}
else if($year == "19")
{

$q = "SELECT *  FROM `msg_count` WHERE `year_id` = '2019'";
}
else if($year == "20")
{

$q = "SELECT *  FROM `msg_count` WHERE `year_id` = '2020'";
}
$k1;
$k2;
$k3;$k4;$k5;$k6;$k7;$k8;$k9;$k10;$k11;$k12;

$run = mysql_query($q);

for($i = 1; $i <= 12; $i ++)

{

if($i == 1)
{
 $k1 = mysql_result($run, $p, 'msg_jan');


$_SESSION['jan'] = $k1;


}

else if($i == 2)
{
  $k2 = mysql_result($run, $p, 'msg_feb');

  
   $_SESSION['feb'] = $k2;

}



else if($i == 3)
{
 $k3 = mysql_result($run, $p, 'msg_mar');


$_SESSION['mar'] = $k3;


}

else if($i == 4)
{
  $k4 = mysql_result($run, $p, 'msg_apr');

    $_SESSION['apr'] = $k4;

}


if($i == 5)
{
 $k5 = mysql_result($run, $p, 'msg_may');


$_SESSION['may'] = $k5;


}

else if($i == 6)
{
  $k6 = mysql_result($run, $p, 'msg_jun');

    
    $_SESSION['jun'] = $k6;

}


if($i == 7)
{
 $k7 = mysql_result($run, $p, 'msg_jul');

$_SESSION['jul'] = $k7;


}

else if($i == 8)
{
  $k8 = mysql_result($run, $p, 'msg_aug');

    
    $_SESSION['aug'] = $k8;

}
else if($i == 9)
{
  $k9 = mysql_result($run, $p, 'msg_sep');

        $_SESSION['sep'] = $k9;

}
else if($i == 10)
{
  $k10 = mysql_result($run, $p, 'msg_oct');

      $_SESSION['oct'] = $k10;

}
else if($i == 11)
{
  $k11 = mysql_result($run, $p, 'msg_nov');

    
     $_SESSION['nov'] = $k11;

}
else if($i == 12)
{
  $k12 = mysql_result($run, $p, 'msg_dec');

     $_SESSION['dec'] = $k12;

}




}


 
$_SESSION['k_tot'] = $k1+$k2+$k3+$k4+$k5+$k6+$k7+$k8+$k9+$k10+$k11+$k12;  





   ?>


