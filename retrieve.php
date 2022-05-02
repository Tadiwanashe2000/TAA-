<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM  course where Course_ID = 'Course_ID'  ");

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";

  echo "<td>" . $row['Course_ID'] . "</td>";

  echo "<td>" . $row['Course_Name'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 
mysql_close($con);


?>
