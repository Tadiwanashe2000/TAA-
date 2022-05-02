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

if(isset($_POST['save']))
{  
   $Course_ID = $_POST['Course_ID'];
   $Course_Name = $_POST['Course_Name'];

   
   $sql = "INSERT INTO `course`(`Course_ID`, `Course_Name`) VALUES ('$Course_ID','$Course_Name')";
   ;

   if (mysqli_query($conn, $sql)) 
   {
    echo "New record created successfully !";
   } 
   else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}

?>
