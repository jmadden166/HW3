<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
  <body>
    <h1>School Information</h1>
<div class="card-group">
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

$sql = "SELECT * from Instructor i join class c on i.ID = c.ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Name"]?></h5>
      <p class="card-text"><ul>
<?php
      
      
  
    
    echo "<li>-ID: " . $row["ID"]. "</li><li>- Name: " . $row["Name"]. "</li><li>- Class: " . $row["Class"]. "</li><li>- Number of Classes Taught: " .  $row["Number of Classes"]. "</li>";
   ?>
         </ul></p>
  </div>
    </div>
   
  <?php  
  }
} else {
  echo "0 results";
} ?>
<?php include 'page3.php'; ?>
    <?php  
$conn->close();
?>
 
  </card-group>
<form method="post" action="page2.php">
  <label for="Class">Class:</label><br>
  <input type="text" id="CName" name="CName"><br>    
  <label for="Grade">GPA:</label><br>
  <input type="text" id="GPA" name="GPA">
  <input type="submit" value="Submit">
</form>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

