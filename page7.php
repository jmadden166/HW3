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
 
$sql3 = "select StudentID, Name from Student where ID = 3";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row = $result3->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Name"]?></h5>
      <p class="card-text"><ul>
<?php
  
    echo "<li>- Student ID: " . $row["StudentID"]. " - Favorite Class ID: " . $row["FavoriteClassID"]. " - Favorite Teacher ID: " . $row["ID"]. "</li>";
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
