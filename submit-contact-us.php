<?php
    include("config.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO report (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo "<script>alert('Your message has been sent.');</script>";
        echo "<script>window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Your message has not been sent.');</script>";
        echo "<script>window.location.href='contact.php';</script>";
    }

?>