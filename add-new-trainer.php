<?php

include ("config.php");

$name = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$position = $_POST['position'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = " INSERT INTO trainer(t_name,t_gender,t_address,t_position,t_dob,t_email,t_phoneNo) VALUES ('$name','$gender','$address','$position','$dob','$email','$phone')";

$result = mysqli_query($conn, $sql);

if ($result == true) {
    echo "<script>
    alert('New Trainer Added Successfully');
    window.location.href='admin.php';
    </script>";
} else {
    echo "<script>
    alert('Error Adding New Trainer');
    window.location.href='admin.php';
    </script>";
}

?>