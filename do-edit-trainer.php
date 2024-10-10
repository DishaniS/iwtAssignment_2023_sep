<?php
    include ("config.php");

    $id = $_POST['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $position = $_POST['position'];

    $sql = "UPDATE trainer SET t_name = '$name', t_email = '$email', t_phoneNo = '$phone', t_address = '$address', t_gender = '$gender', t_dob = '$dob', t_position = '$position' WHERE t_ID = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result == true) {
        echo "<script>
        alert('Trainer Updated Successfully');
        window.location.href='Asath-admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Error Updating Trainer');
        window.location.href='Asath-admin.php';
        </script>";
    }
    
    mysqli_close($conn);
?>