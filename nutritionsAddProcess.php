<?php

require "processes/DB.php";

if (isset($_GET["status"])) {
    echo '<script>
    setTimeout(function() {
        alert("' . $_GET["status"] . '");
    }, 1000); </script>';
}

$q2 = "SELECT * FROM `plantype`";
$rs2 = $conn->query($q2);
$n2 = $rs2->num_rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritions Plan - Add</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">Nutritions Plan - Add</div>
            <ul class="nav">
                <li>
                    <a href="nutritionsUpdate.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="form">
        <div class="container">
            <h2 style="margin-top: 20px;">Add a New Nutritions Plan</h2>
            <br>
        </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <form action="processes/addProcess.php" method="post">

                <label for="fname">Plan Name:</label><br>
                <input type="text" name="planName" required><br><br>

                <label for="lname">Trainer Name:</label><br>
                <input type="text" id="lname" name="trainerName" required><br><br>

                <label for="bio">Plan Description:</label><br>
                <textarea id="bio" name="planDescription" rows="10" cols="70" required></textarea><br><br>

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
                <input name="planAdd" style="background-color: blue; color: white; font-weight: bold; " type="submit" value="Add">
            </form>
        </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/6ba34a4059.js" crossorigin="anonymous"></script>

</body>

</html>