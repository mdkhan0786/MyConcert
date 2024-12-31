<?php
$servername = "localhost";
$username= "root";
$password="";
$dbname= "myproject";

$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("connection Faild". $conn->connect_error);
}

?>