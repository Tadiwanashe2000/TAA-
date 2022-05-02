<?php 

//declaration of connection variable

$servername = "127.0.0.1"; //if now deploying the site use original IP address for hosted server
$username = "root";
$password = "";
$database_name = "au_erp";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
session_start();
if(isset($_POST['Save']))
{
    extract($_POST);

    $sql=mysqli_query($conn,"SELECT * FROM users where username='$username' and Password='md5($password_hash)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        echo "Welcome";
    }
    else
    {
        echo "Not Known";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>
</head>
<body>
<form method="Post">
  <label >Username</label>
  <input type="text" name="Username">
  <br>
  <label >Password</label>
  <input type="password" name="Password_Hash" >
  <br>
  <button type="Save" name="Save">Log In</button>
</form>
</body>
</html>