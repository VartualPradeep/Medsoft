<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medsoft";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Failed to connect to the server" . $conn->connect_error);
}