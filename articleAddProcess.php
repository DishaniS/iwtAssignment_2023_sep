<?php

require "processes/DB.php";

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
            <h2 style="margin-top: 20px;">Add New Nutritions Article</h2>
            <br>
        </div>
        </div>
    </section>

    <section class="form">
        <div class="container">
            <form action="processes/addProcess.php" method="post">

                <label for="fname">Article Name:</label><br>
                <input type="text" name="articleName" required><br><br>

                <label for="bio">Article Description:</label><br>
                <textarea id="bio" name="articleDescription" rows="10" cols="70" required></textarea>
                <br>
                <br>
                <input name="articleAdd" style="background-color: blue; color: white; font-weight: bold; " type="submit" value="Add">
            </form>
        </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/6ba34a4059.js" crossorigin="anonymous"></script>

</body>

</html>