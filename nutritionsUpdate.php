<?php

require "processes/DB.php";

$q1 = "SELECT * FROM `nutritionplan`";
$rs1 = $conn->query($q1);
$n1 = $rs1->num_rows;

$q2 = "SELECT * FROM `plantype`";
$rs2 = $conn->query($q2);
$n2 = $rs2->num_rows;

$q3 = "SELECT * FROM `nutritionarticles`";
$rs3 = $conn->query($q3);
$n3 = $rs3->num_rows;

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
    <title>Nutritions Plans</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">Nutritions Plans</div>
            <ul class="nav">
                <li>
                    <a href="nutritionsUpdate.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <div style="margin-top: 25px; text-align: center;">
                <h1>Nutritions Articles and Guides Update</h1>
            </div>
        </div>
    </header>

    <section class="boxes">
        <div class="container">
            <div class="box">
                <h3><i class="fas fa-arrows-alt-v"></i> Total No of Nutrition Plans</h3>
                <h1><?php echo $n1; ?></h1>
            </div>
            <div class="box">
                <h3><i class="fas fa-arrows-alt-v"></i> Total No of Nutrition Plan Types</h3>
                <h1><?php echo $n2; ?></h1>
            </div>
            <div class="box">
                <h3><i class="fas fa-arrows-alt-v"></i> Total No of Nutrition Articles</h3>
                <h1><?php echo $n3; ?></h1>
            </div>
        </div>
    </section>

    <section class="boxes">
        <div class="container" style="text-align: center; margin-top: 1%; justify-content: center; color: darkblue; ">
            <h2 style="margin-right: 40px; background-color: white; padding: 10px; border-radius: 10px; ">
                <a href="nutritionsAddProcess.php">Add a New Nutrition Plan</a>
            </h2>
            <h2 style="background-color: white; padding: 10px; border-radius: 10px; ">
                <a href="articleAddProcess.php">Add a New Nutrition Article</a>
            </h2>
        </div>
    </section>

    <section class="boxes">
        <div class="container" style="text-align: center; margin-top: 1%; justify-content: center; color: darkblue; ">
            <h2>Nutrition Plans</h2>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <table class="table" style="margin-top: 5px;">
                <thead>
                    <tr>
                        <th>Plan ID</th>
                        <th>Plan Name</th>
                        <th>Plan Description</th>
                        <th>Trainer Name</th>
                        <th>Plan Type</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    for ($i = 0; $i < $n1; $i++) {
                        $d1 = $rs1->fetch_assoc();

                        $q4 = "SELECT * FROM `plantype` WHERE planTypeId='" . $d1["planTypeId"] . "'";
                        $rs4 = $conn->query($q4);
                        $d4 = $rs4->fetch_assoc();
                    ?>
                        <tr>
                            <td data-label="S.No">
                                <?php echo $d1["planId"]; ?>
                            </td>
                            <td data-label="Name">
                                <?php echo $d1["planName"]; ?>
                            </td>
                            <td data-label="Name">
                                <?php echo $d1["planDescription"]; ?>
                            </td>
                            <td data-label="Name">
                                <?php echo $d1["trainerName"]; ?>
                            </td>
                            <td data-label="Name">
                                <?php echo $d4["planTypeName"]; ?>
                            </td>
                            <td data-label="Staus">
                                <a href="nutritionsUpdateProcess.php?planId=<?php echo $d1["planId"]; ?>">Update</a>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>

                </tbody>
            </table>
        </div>
        </div>
    </section>

    <section class="boxes">
        <div class="container" style="text-align: center; margin-top: 1%; justify-content: center; color: darkblue; ">
            <h2>Nutrition Articles</h2>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <table class="table" style="margin-top: 5px;">
                <thead>
                    <tr>
                        <th>Article ID</th>
                        <th>Article Name</th>
                        <th>Article Description</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    for ($i = 0; $i < $n3; $i++) {
                        $d3 = $rs3->fetch_assoc();
                    ?>
                        <tr>
                            <td data-label="S.No">
                                <?php echo $d3["articlesId"]; ?>
                            </td>
                            <td data-label="Name">
                                <?php echo $d3["articleName"]; ?>
                            </td>
                            <td data-label="Name">
                                <?php echo $d3["articleDescription"]; ?>
                            </td>
                            <td data-label="Staus">
                                <a href="articleUpdateProcess.php?articleId=<?php echo $d3["articlesId"]; ?>" style="margin-right: 20px;">Update</a>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>

                </tbody>
            </table>
        </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/6ba34a4059.js" crossorigin="anonymous"></script>

</body>

</html>