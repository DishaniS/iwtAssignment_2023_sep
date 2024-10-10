<?php
//database connection

$host = "localhost"; 
$username = "root";
$password = "";
$database = "online_fitness_trainer";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

    include"config.php";
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("Location: dhanushiLogin.php");
        exit();
    }
    include "header.php";


//handle form submission
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	//GET FORM DATA
	$Order_ID = $_POST['orderID'];
	$Product_Name = $_POST['orderName'];
	$Quantity = $_POST['quantity'];
	$Total = $_POST['total'];

//save user info to database
	$sql = "INSERT INTO orders (orderID, orderName, quantity, total) VALUES ('$Order_ID','$Product_Name','$Quantity','$Total')";

	$result = mysqli_query($conn, $sql);
        
    if($result)
    {
        
        header('location:merch.html');
    }
    else{
        die(mysqli_error($conn));
    }


}


// Close the database
mysqli_close($conn);
?>