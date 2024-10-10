<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete workout plan</title>
    <link rel="stylesheet" type="text/css" href="style/dishaniCustom.css">
        <link rel="stylesheet" type="text/css" href="style/navBar.css">
</head>
<body>
<div class="navbar">
    <a href="index.php">Add Fitness Data</a>
    <a href="fitnessData.php">View Fitness Data</a>
    <a href="blog.php">Blog</a>
</div>

<br>

<div>
    <h1>Delete Data</h1>
    <div class="confirm_msg">
        <div class="msgcontainer">
            <p class="deletemsg">Are You Sure to Permanently Delete this prescription?</p>
            <div class="btncontainer">
                <center>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        echo '<a href="deletedata.php?state=1&id=' . $id . '" class="smallbtn">Yes</a>';
                    }
                    ?>
                    <a href="fitnessData.php" class="smallbtn">No</a>
                </center>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_GET['state']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM fitnessmodel WHERE id = $id";
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_assoc($result);
    $sql = "DELETE FROM fitnessmodel WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: fitnessData.php?error=Details has been deleted");
    } else {
        header("Location: fitnessData.php?error=Details cannot be deleted due to an error");
    }
}
?>

</body>
</html>
