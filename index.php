<?php
// made by Gerardo Herrera gherrera2k1@gmail.com

//error_reporting(E_ALL);
//ini_set('display_errors', '1');
//echo = $_GET[nombre]);
$myObj->message = "Hello ".$_GET["name"]." from ".gethostname();
//$myObj->age = $_GET["nombre"];
//$myObj->age = $_GET[nombre]);
//$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
