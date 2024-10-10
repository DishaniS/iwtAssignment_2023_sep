<?php

include ("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM member WHERE member_ID='$id'";
    $result = mysqli_query($conn, $sql);
    echo "<script> alert('User Deleted Successfully');
    window.location.href='admin.php';
    </script>";
} else {
    echo "<script>
    alert('Error Deleting User - Please Try Again');
    window.location.href='admin.php';
    </script>";
}