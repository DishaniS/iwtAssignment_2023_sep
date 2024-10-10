<?php

require "DB.php";

if (isset($_POST["planAdd"])) {
    if (
        empty($_POST["planName"])
        || empty($_POST["trainerName"])
        || empty($_POST["planDescription"])
        || empty($_POST["planType"])
    ) {
        header("Location: ../nutritionsAddProcess.php?status=Empty Input !");
        exit;
    } else {
        $planName = $_POST["planName"];
        $planDes = $_POST["planDescription"];
        $planType = $_POST["planType"];
        $trainerName = $_POST["trainerName"];

        $q1 = "INSERT INTO `nutritionplan` (planName, planDescription,trainerName,planTypeId)
        VALUES ('" . $planName . "','" . $planDes . "','" . $trainerName . "','" . $planType . "')";
        $rs1 = $conn->query($q1);
        $conn->close();

        header("Location: ../nutritionsUpdate.php?status=Successfully Added !");
        exit;
    }
} elseif (isset($_POST["articleAdd"])) {
    if (
        empty($_POST["articleName"])
        || empty($_POST["articleDescription"])
    ) {
        header("Location: ../articleAddProcess.php?status=Empty Input !");
        exit;
    } else {
        $articleName = $_POST["articleName"];
        $articleDes = $_POST["articleDescription"];

        $q2 = "INSERT INTO `nutritionarticles` (articleName, articleDescription)
        VALUES ('" . $articleName . "','" . $articleDes . "')";
        $rs2 = $conn->query($q2);
        $conn->close();

        header("Location: ../nutritionsUpdate.php?status=Successfully Added !");
        exit;
    }
} else {
    header("Location: ../nutritionsUpdate.php");
    exit;
}
