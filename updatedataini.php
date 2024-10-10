<?php
    include "config.php";

    $message= "The prescription has";
    $gender = $_POST['gender'];
    $uom = $_POST['uom'];
    $weight = $_POST['weight'];
    $fitnesslevel = $_POST['fitnesslevel'];
    $fitnessgoal = $_POST['fitnessgoal'];
    $equipment = $_POST['equipment'];
    $days = $_POST['days'];
    $id = $_POST['id'];

    $sql = "SELECT * FROM fitnessmodel WHERE id= '$id'";

    if (mysqli_query($conn,$sql)){
        $sqlupdate ="UPDATE fitnessmodel
                    SET gender = '$gender', unit = '$uom', weight = '$weight', fitnessLevel = '$fitnesslevel', goal = '$fitnessgoal', equipment = '$equipment', days = '$days'  
                    WHERE id = '$id';";

        if(mysqli_query($conn,$sqlupdate)){
            $message = $message . " Successfully Updated !";
            header("Location: fitnessData.php?error=$message");
        }else{
            $message = $message . " Not Updated !";
            header("Location: updatedata.php?error=$message&id= $id");
        }
    }else{

    }
    ?>