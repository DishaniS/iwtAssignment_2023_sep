<?php
include ("config.php");
$id = $_GET['id'];

if($_GET['confirmed'] == null){
    echo "<script>
    var result = confirm('Are you sure you want to delete this trainer?');
    if (result) {
        window.location.href = 'delete-trainer.php?id=$id&confirmed=true';
    } else {
        window.location.href = 'Asath-admin.php';
    }
</script>";
}


if (isset($_GET['confirmed'])) {
    $sql = "DELETE FROM trainer WHERE t_ID='$id'";
    $result = mysqli_query($conn, $sql);
}   else {
    echo "<script>
    alert('Error Deleting Trainer - Please Try Again');
    window.location.href='Asath-admin.php';
    </script>";
}


if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Trainer Deleted Successfully');
    window.location.href='Asath-admin.php';
    </script>";
} else {
    echo "<script>
    alert('Error Deleting Trainer - row not affected');
    window.location.href='Asath-admin.php';
    </script>";
}

close ($conn);


?>