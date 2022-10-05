<!doctype html>
<html lang="en">
<?php
$servername = "localhost";
$username = "jackstra_Homework3";
$password = "+JMx3n7)k+!H";
$dbname = "jackstra_Homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  ?>

  <?php  
 
  $sql2 = "SELECT * from Class";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["ClassName"]?></h5>
      <p class="card-text"><ul>
<?php
  
    echo "<li>- Class ID: " . $row["ClassID"]. " - Class Name: " . $row["ClassName"]. " - Average Grade: " . $row["AverageGrade"]. "</li>";
   ?>
      <br>
         </ul></p>
  </div>
    </div>
  <?php  
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</html>
