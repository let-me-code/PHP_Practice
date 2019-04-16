<?php

$username="root";
$password="";
$db="zomi";


$con= mysqli_connect('localhost',$username,$password,$db) or die("connection failed".$con->connect_error);

$sql="create table swig(name char(20),age int(10))";

if($con->query($sql)===TRUE)
  echo "table created successfully";
else {
    echo "Table not created";
}
 ?>
