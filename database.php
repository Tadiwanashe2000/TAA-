<?php 

//declaration of connection variable

$servername = "127.0.0.1"; //if now deploying the site use original IP address for hosted server
$username = "root";
$password = "";
$database_name = "au_academia";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

?>