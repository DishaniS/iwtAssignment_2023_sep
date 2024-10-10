<?php

require "config.php";

if (isset($_GET["planId"])) {

    $planType = $_GET["planId"];

    $q1 = "SELECT * FROM `nutritionplan` WHERE planTypeId='" . $planType . "'";
    $rs1 = $conn->query($q1);
    $n1 = $rs1->num_rows;

    $q2 = "SELECT * FROM `planType` ORDER BY CASE WHEN planTypeId = '" . $planType . "' THEN 0 ELSE 1 END,planTypeId";
    $rs2 = $conn->query($q2);
    $n2 = $rs2->num_rows;
} else {

    $q02 = "SELECT * FROM `plantype`";
    $rs02 = $conn->query($q02);
    $n02 = $rs02->num_rows;
    $d02 = $rs02->fetch_assoc();

    $q2 = "SELECT * FROM `plantype`";
    $rs2 = $conn->query($q2);
    $n2 = $rs2->num_rows;

    $q1 = "SELECT * FROM `nutritionplan` WHERE planTypeId='" . $d02["planTypeId"] . "'";
    $rs1 = $conn->query($q1);
    $n1 = $rs1->num_rows;
}

$q3 = "SELECT * FROM `nutritionarticles`";
$rs3 = $conn->query($q3);
$n3 = $rs3->num_rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/web.css">
    <title>Nutrition</title>
</head>

<body onload="slider()">
    <section class="slide">
        <div class="banner">
            <div class="slider">
                <img src="Images/slid1.jpg" id="slideimg"> <br>
                <hr>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="personal">
            <div class="ptop">
                <center><img src="Images/avatar.png" alt=""></center>
                <center>
                    <h1>Name</h1>
                </center>
            </div>
            <br><br>
            <div class="pbtm">
                <h3><a href="">Trainers</a></h3>
                <hr>
                <h3><a href="">Members</a></h3>
                <hr>
                <h3><a href="">Offers</a></h3>
                <hr>
                <h3><a href="">Settings</a></h3>
                <hr>
                <h3><a href="">Notifications</a></h3>
            </div>
        </div>
        <div class="main">
            <div class="mtop">
                <ul class="btns">
                    <li><img src="Images/news.jpg"><a href=""><button>Nutritions Articles and Guides</button></a><br></li>
                    <li>
                        <img src="Images/food.jpg">
                        <form id="myForm" action="processes/planSelect.php" method="post">
                            <select name="planType" onchange="submitForm()">
                                <?php
                                for ($i = 0; $i < $n2; $i++) {
                                    $d2 = $rs2->fetch_assoc();
                                ?>
                                    <option value="<?php echo $d2["planTypeId"]; ?>"><a href="#"><?php echo $d2["planTypeName"]; ?></a></option>
                                <?php
                                }
                                ?>

                            </select>
                        </form>

                        <script>
                            function submitForm() {
                                document.getElementById('myForm').submit();
                            }
                        </script>
                    </li>
                </ul>
                <div class="mmid">
                    <ul>
                        <?php

                        for ($i = 0; $i < $n1; $i++) {
                            $d1 = $rs1->fetch_assoc();
                        ?>
                            <li>
                                <h2><?php echo $d1["planName"]; ?></h2>
                                <h2 style="color: blue;">Trainer - <?php echo $d1["trainerName"]; ?></h2>
                                <p>
                                    <?php echo $d1["planDescription"]; ?>
                                </p>
                                <a href="#"><button>Get Started</button></a>
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
                <div class="mbtm">
                    <h1>Nutritions Blog latest articles</h1>
                    <ul>
                        <?php

                        for ($i = 0; $i < $n3; $i++) {
                            $d3 = $rs3->fetch_assoc();
                        ?>
                            <li><img src="Images/nutri00<?php echo $i + 1; ?>.jpg"><br>
                                <p>
                                <h2>"<?php echo $d3["articleName"]; ?></h2><br>
                                <p><?php echo $d3["articleDescription"]; ?></p>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="charts">
            <img src="Images/eggmeal.jpg" alt="" class="img1">
            <br><br>
            <img src="Images/bar.png" alt="" class="img2">
            <img src="./Images/balencediet002-removebg.png" alt="" class="img3">
        </div>
    </section>
    <script>
        var slideimg = document.getElementById("slideimg");
        var images = new Array("Images/slid1.jpg", "Images/slid1.jpg", "Images/slid2.jpg", "Images/slid3.jpg", "Images/slid4.jpg", "Images/slid5.jpg");
        var len = images.length
        var i = 0;

        function slider() {
            if (i > len - 1) {
                i = 0;
            }
            slideimg.src = images[i];
            i++;
            setTimeout('slider()', 3000);
        }
    </script>
</body>

</html>