
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_GET['email'];
$password=$_GET['psw'];

$sql = "SELECT password FROM student where email='$email';";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_assoc($result);
  if($row['password']==$password)
  {
    echo "Login Successful";
  }
  else{
      echo "Incorrect password";
  }
} 
else {
  echo "Account not found!";
}
$conn->close();

?>