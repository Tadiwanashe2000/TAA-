<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT Course_ID FROM course WHERE Course_ID = '$Course_ID'" );
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Retrieve data</title>
      <link rel="stylesheet" href="style.css">
 </head>
<body style="color: white;">

    <label>COURSE ID</label>
    <input type="text" name="Course_ID">
    <button type="Submit" input type="submit" name="save" value="Submit">Register Course</button>
    <a href="index.html"><button>Main Menu</button></a>
        
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Course ID</td>
    <td>Course Name</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Course_ID"]; ?></td>
    <td><?php echo $row["Course_Name"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
