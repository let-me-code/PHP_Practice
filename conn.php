<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully";

$sql="create database zomi123";

if($conn->query($sql)===TRUE)
    echo "Created successfully";
else 
  echo"sorry";

}
?>
