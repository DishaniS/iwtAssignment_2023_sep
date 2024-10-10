<?php

require "DB.php";

if (isset($_POST["update"])) {
    if (
        empty($_POST["planId"])
        || empty($_POST["planName"])
        || empty($_POST["trainerName"])
        || empty($_POST["planDescription"])
        || empty($_POST["planType"])
    ) {
        header("Location: ../nutritionsUpdateProcess.php?planId=" . $_POST["planId"] . "&status=Emplty Input !");
        exit;
    } else {
        $planId = $_POST["planId"];
        $planName = $_POST["planName"];
        $planDes = $_POST["planDescription"];
        $planType = $_POST["planType"];
        $trainerName = $_POST["trainerName"];

        $q1 = "UPDATE `nutritionplan` 
        SET planName = '" . $planName . "', planDescription = '" . $planDes . "', 
        planTypeId = '" . $planType . "', trainerName = '" . $trainerName . "' 
        WHERE planId = '" . $planId . "'";
        $rs1 = $conn->query($q1);

        header("Location: ../nutritionsUpdateProcess.php?planId=" . $_POST["planId"] . "&status=Updated Successfully!");
        exit;
    }
} else if (isset($_POST["delete"])) {
    if (
        empty($_POST["planId"])
    ) {
        header("Location: ../nutritionsUpdateProcess.php?planId=" . $_POST["planId"] . "&status=Emplty Input !");
        exit;
    } else {
        $planId = $_POST["planId"];

        $q2 = "DELETE FROM `nutritionplan` WHERE planId = '" . $planId . "'";
        $rs2 = $conn->query($q2);

        header("Location: ../nutritionsUpdate.php?status=Deleted Successfully !");
        exit;
    }
} elseif (isset($_POST["articleUpdate"])) {
    if (
        empty($_POST["articleId"])
        || empty($_POST["articleName"])
        || empty($_POST["articleDescription"])
    ) {
        header("Location: ../articleUpdateProcess.php?articleId=" . $_POST["planId"] . "&status=Emplty Input !");
        exit;
    } else {
        $articleId = $_POST["articleId"];
        $articleName = $_POST["articleName"];
        $articleDes = $_POST["articleDescription"];

        $q3 = "UPDATE `nutritionarticles` 
        SET articleName ='" . $articleName . "', articleDescription='" . $articleDes . "' WHERE articlesId ='" . $articleId . "'";
        $rs3 = $conn->query($q3);
        $conn->close();

        header("Location: ../articleUpdateProcess.php?articleId=" . $_POST["articleId"] . "&status=Updated Successfully!");
        exit;
    }
} else if (isset($_POST["articleDelete"])) {
    if (
        empty($_POST["articleId"])
    ) {
        header("Location: ../articleUpdateProcess.php?articleId=" . $_POST["planId"] . "&status=Emplty Input !");
        exit;
    } else {
        $articleId = $_POST["articleId"];

        $q4 = "DELETE FROM `nutritionarticles` WHERE articlesId = '" . $articleId . "'";
        $rs4 = $conn->query($q4);

        header("Location: ../nutritionsUpdate.php?status=Deleted Successfully !");
        exit;
    }
} else {
    header("Location: ../nutritionsUpdate.php");
    exit;
}
