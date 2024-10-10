<?php
    include_once "config.php";

    session_start();
    session_destroy();
    echo "<script>window.location.href = 'dhanushiLogin.php'</script>";
    //header("Location: dhanushiLogin.php");
?>

