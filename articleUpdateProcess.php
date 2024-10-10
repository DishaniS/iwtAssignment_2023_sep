<?php

require "processes/DB.php";

if (!isset($_GET["articleId"])) {
    header("location: nutritionsUpdate.php");
    exit();
} else {
    $articleType = $_GET["articleId"];

    $q1 = "SELECT * FROM `nutritionarticles` WHERE articlesId='" . $articleType . "'";
    $rs1 = $conn->query($q1);
    $n1 = $rs1->num_rows;
    $d1 = $rs1->fetch_assoc();
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
    <title>Nutritions Article - Add</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">Nutritions Article - Add</div>
            <ul class="nav">
                <li>
                    <a href="nutritionsUpdate.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="form">
        <div class="container">
            <h2 style="margin-top: 20px;">Update Nutritions Article</h2>
            <br>
        </div>
        </div>
    </section>

    <section class="form">
        <div class="container">
            <form action="processes/updateProcess.php" method="post">

                <label for="fname">Article Id:</label><br>
                <input type="text" style="background-color: white; font-weight: bold;" value="<?php echo $d1["articlesId"]; ?>" disabled>
                <input name="articleId" type="text" style="visibility: hidden;" value="<?php echo $d1["articlesId"]; ?>"><br><br>

                <label for="fname">Article Name:</label><br>
                <input type="text" name="articleName" value="<?php echo $d1["articleName"]; ?>" required><br><br>

                <label for="bio">Article Description:</label><br>
                <textarea id="bio" name="articleDescription" rows="10" cols="70"><?php echo $d1["articleDescription"]; ?></textarea>
                <br>
                <br>
                <input name="articleUpdate" style="margin-right: 20px; background-color: green; color: white; font-weight: bold; " type="submit" value="Update">
                <input name="articleDelete" style="background-color: red; color: white; font-weight: bold; " type="submit" value="Delete">
            </form>
        </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/6ba34a4059.js" crossorigin="anonymous"></script>

</body>

</html>