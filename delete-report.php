<?php

include ("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM report WHERE rep_ID='$id'";
    $result = mysqli_query($conn, $sql);
    echo "<script> alert('Report Deleted Successfully');
    window.location.href='admin.php';
    </script>";
} else {
    echo "<script>
    alert('Error Deleting Report - Please Try Again');
    window.location.href='admin.php';
    </script>";
}

?>