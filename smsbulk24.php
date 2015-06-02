<?php

echo "coming";

if(isset($_POST['contact']) && isset($_POST['message']))

{
    

     $contact = $_POST['contact'];

     $mes = $_POST['message'];

     if(!empty($contact) && !empty($mes))
     {




//Your authentication key
$authKey = "4537An3eeHCCL2Iv5560b0ea";

//Multiple mobiles numbers separated by comma
$mobileNumber = $contact;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "rajiva";

//Your message to send, Add URL encoding here.
$message = urlencode($mes);

//Define route 
$route = "1";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://sms.bulk24sms.com/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;

}

}
?>


<form action="sms2.php" method="POST">

Numbers <input type="text" name="contact">

Message <input type="text"  name="message">

<input type="submit" value="SEND" name="send">




</form>