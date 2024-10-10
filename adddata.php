<?php

include "config.php";

$gender = $_POST['gender'];
$uom = $_POST['uom'];
$weight = $_POST['weight'];
$fitnesslevel = $_POST['fitnesslevel'];
$fitnessgoal = $_POST['fitnessgoal'];
$equipment = $_POST['equipment'];
$days = $_POST['days'];


$sql = "INSERT INTO fitnessmodel (gender, unit, weight, fitnessLevel, goal, equipment, days)
 VALUES ('$gender', '$uom', '$weight', '$fitnesslevel', '$fitnessgoal', '$equipment', '$days')";

if (mysqli_query($conn, $sql)) {
    header("Location: fitnessData.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
