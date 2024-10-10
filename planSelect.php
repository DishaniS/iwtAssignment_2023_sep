<?php

require "DB.php";

$planType = $_POST["planType"];

// echo $planType;
header("location: ../Deshithanutrition.php?planId=" . $planType . "");
exit();
