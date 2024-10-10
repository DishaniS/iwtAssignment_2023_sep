<?php

require "processes/DB.php";

if (!isset($_GET["planId"])) {
    header("location: ./nutritionsUpdate.php");
    exit();
} else {
    $planId = $_GET["planId"];

    $q1 = "SELECT * FROM `nutritionplan` WHERE planId='" . $planId . "'";
    $rs1 = $conn->query($q1);
    $d1 = $rs1->fetch_assoc();


    $q2 = "SELECT * FROM `planType` ORDER BY CASE WHEN planTypeId = '" . $d1["planTypeId"] . "' THEN 0 ELSE 1 END,planTypeId";
    $rs2 = $conn->query($q2);
    $n2 = $rs2->num_rows;
}

if (isset($_GET["status"])) {
    echo '<script>
    setTimeout(function() {
        alert("' . $_GET["status"] . '");
    }, 1000); </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritions Plan - Update</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">Nutritions Plan - Update</div>
            <ul class="nav">
                <li>
                    <a href="nutritionsUpdate.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="form">
        <div class="container">
            <h2 style="margin-top: 20px;">Update Nutritions Plan</h2>
            <br>
        </div>
        </div>
    </section>
    <section class="form" style="margin-bottom: 20px;">
        <div class="container">
            <form action="processes/updateProcess.php" method="post">

                <label for="fname">Plan Id:</label><br>
                <input type="text" style="background-color: white; font-weight: bold;" value="<?php echo $d1["planId"]; ?>" disabled>
                <input name="planId" type="text" style="visibility: hidden;" value="<?php echo $d1["planId"]; ?>"><br><br>

                <label for="fname">Plan Name:</label><br>
                <input type="text" name="planName" value="<?php echo $d1["planName"]; ?>" required><br><br>

                <label for="lname">Trainer Name:</label><br>
                <input type="text" id="lname" name="trainerName" value="<?php echo $d1["trainerName"]; ?>" required><br><br>

                <label for="bio">Plan Description:</label><br>
                <textarea id="bio" name="planDescription" rows="10" cols="70" required><?php echo $d1["planDescription"]; ?></textarea><br><br>

                <label for="gender">Plan Type:</label><br>
                <select name="planType" required>
                    <?php

                    for ($i = 0; $i < $n2; $i++) {
                        $d2 = $rs2->fetch_assoc();
                    ?>
                        <option value="<?php echo $d2["planTypeId"]; ?>"><a href="#"><?php echo $d2["planTypeName"]; ?></a></option>
                    <?php
                    }
                    ?>

                </select>
                <br>
                <br>
                <input name="update" style="margin-right: 20px; background-color: green; color: white; font-weight: bold; " type="submit" value="Update">
                <input name="delete" style="background-color: red; color: white; font-weight: bold; " type="submit" value="Delete">
            </form>
        </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/6ba34a4059.js" crossorigin="anonymous"></script>

</body>

</html>