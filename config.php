<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_fitness_trainer";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>