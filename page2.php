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
 
$sql1 = "select StudentID, Name, from Student where GPA=" $_POST["1GPA"];
$result2 = $conn->query($sql1);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Name"]?></h5>
      <p class="card-text"><ul>
<?php
  
    echo "<li>- Student ID: " . $row["StudentID"]. " - GPA: " . $row["GPA"]. "</li>";
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
