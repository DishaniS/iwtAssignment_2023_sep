<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Workout Plans</title>
    <link rel="stylesheet" type="text/css" href="style/dishaniCustom.css">
        <link rel="stylesheet" type="text/css" href="style/navBar.css">
</head>
<body>
<div class="navbar">
    <a href="Dishani-workout.php">Add Fitness Data</a>
    <a href="fitnessData.php">View Fitness Data</a>
    <a href="blog.php">Blog</a>
</div>
<br>
<div>
    <h1>Fitness Data</h1>
    <table class="dashboardform">
        <thead>
            <tr>
                <th>Gender</th>
                <th>Unit of Measurement</th>
                <th>Body Weight</th>
                <th>Fitness Level</th>
                <th>Fitness Goal</th>
                <th>Equipment</th>
                <th>Workout per Week</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM fitnessmodel";
            $result = mysqli_query($conn, $sql);

            if (!empty($result)) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    ?>
                    <tr>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['unit'] ?></td>
                        <td><?php echo $row['weight'] ?></td>
                        <td><?php echo $row['fitnessLevel'] ?></td>
                        <td><?php echo $row['goal'] ?></td>
                        <td><?php echo $row['equipment'] ?></td>
                        <td><?php echo $row['days'] ?></td>
                        <td>
                            <div class="smallbtncontainer">
                                <a href="updatedata.php?id=<?php echo $id ?>" class="smallbtn">Update</a>
                                <a href="deletedata.php?id=<?php echo $id ?>" class="smallbtn">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
