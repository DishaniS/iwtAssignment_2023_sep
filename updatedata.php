<?php
include "config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM fitnessmodel WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result); // Fetch the data as an associative array
    if ($row) {
      $id = $row['id'];
      $gender = $row['gender'];
      $unit = $row['unit'];
      $weight = $row['weight'];
      $fitnessLevel = $row['fitnessLevel'];
      $goal = $row['goal'];
      $gender = $row['gender'];
      $equipment = $row['equipment'];
      $days = $row['days'];
    } else {
        $gender = 'N/A';
    }
} else {
    $gender = 'Error';
}
?>

<!DOCTYPE html>
<html>
    <head>
      <title>Update workout plan</title>
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
        <h1>Update Data</h1>
            <div id="form_div">
                <form id="cusForm" action="updatedataini.php" method="post">
                    <div id="gender_and_unit_container">
                        <div>
                            <h4>Gender</h4>
                            <input type="radio" id="Male" name="gender" value="Male" required <?php if($gender == 'Male') echo 'checked'; ?>>
                            <label for="Male">Male</label>
                            <input type="radio" id="Female" name="gender" value="Female" <?php if($gender == 'Female') echo 'checked'; ?>>
                            <label for="Female">Female</label>
                        </div>

                        <div>
                            <h4>Unit of measurement</h4>
                            <input type="radio" id="lbs" name="uom" value="Lbs" <?php if($unit == 'Lbs') echo 'checked'; ?>>
                            <label for="lbs">Lbs</label>
                            <input type="radio" id="Kgs" name="uom" value="Kgs" <?php if($unit == 'Kgs') echo 'checked'; ?>>
                            <label for="Kgs">Kgs</label>
                        </div>
                    </div>
                    <br><br>

                    <fieldset class="field">
                        <legend>Body Weight</legend>
                        <label for="weight">Enter Weight:</label>
                        <input type="number" id="weight" name="weight" min="0" step="0.1" class="weh" required value="<?php echo $weight; ?>">
                    </fieldset><br>

                    <fieldset class="field">
                        <legend>Fitness Level</legend>
                        <select name="fitnesslevel" id="fitlevel" class="sel-rad">
                            <option value="Beginner" <?php if($fitnessLevel == 'Beginner') echo 'selected'; ?>>Beginner</option>
                            <option value="Intermediate" <?php if($fitnessLevel == 'Intermediate') echo 'selected'; ?>>Intermediate</option>
                            <option value="Advanced" <?php if($fitnessLevel == 'Advanced') echo 'selected'; ?>>Advanced</option>
                            <option value="Professional" <?php if($fitnessLevel == 'Professional') echo 'selected'; ?>>Professional/Eliminate</option>
                        </select>
                    </fieldset><br>

            <fieldset class="field">
                <legend>Fitness Goal</legend>
                    <select name="fitnessgoal" id="fitnessgoal" class="sel-rad">
                        <option  value="Stress Reduction" <?php if($goal == 'Stress Reduction') echo 'selected'; ?> >Stress Reduction</option>
                        <option  value="Weight Loss" <?php if($goal == 'Weight Loss') echo 'selected'; ?> >Weight Loss</option>
                        <option  value="Muscle Gain" <?php if($goal == 'Muscle Gain') echo 'selected'; ?> >Muscle Gain</option>
                        <option  value="Cardiovascular Fitness" <?php if($goal == 'Cardiovascular Fitness') echo 'selected'; ?> >Cardiovascular Fitness</option>
                        <option  value="Flexibility and Mobility" <?php if($goal == 'Flexibility and Mobility') echo 'selected'; ?> >Flexibility and Mobility</option>
                        <option  value="Athletic Performance" <?php if($goal == 'Athletic Performance') echo 'selected'; ?> >Athletic Performance</option>
                        <option  value="Functional Fitness" <?php if($goal == 'Functional Fitness') echo 'selected'; ?> >Functional Fitness</option>
                        <option  value="Body Composition" <?php if($goal == 'Body Composition') echo 'selected'; ?> >Body Composition</option>
                        <option  value="Health and Wellness" <?php if($goal == 'Health and Wellness') echo 'selected'; ?> >Health and Wellness</option>
                        <option  value="Weight Maintenance" <?php if($goal == 'Weight Maintenance') echo 'selected'; ?> >Weight Maintenance</option>
                    </select>
            </fieldset><br>

            <fieldset class="field">
                <legend>Equipment</legend>
                    <select name="equipment" id="equipment" class="sel-rad">
                        <option  value="Treadmill" <?php if($equipment == 'Treadmill') echo 'selected'; ?> >Treadmill</option>
                        <option  value="Jump Rope" <?php if($equipment == 'Jump Rope') echo 'selected'; ?> >Jump Rope</option>
                        <option  value="Dumbbells" <?php if($equipment == 'Dumbbells') echo 'selected'; ?> >Dumbbells</option>
                        <option  value="Kettlebells" <?php if($equipment == 'Kettlebells') echo 'selected'; ?> >Kettlebells</option>
                        <option  value="Yoga Blocks and Straps" <?php if($equipment == 'Yoga Blocks and Straps') echo 'selected'; ?> >Yoga Blocks and Straps</option>
                        <option  value="Push up bar" <?php if($equipment == 'Push up bar') echo 'selected'; ?> >Push up bar</option>
                        <option  value="Medicine Balls" <?php if($equipment == 'Medicine Balls') echo 'selected'; ?> >Medicine Balls</option>
                        <option  value="Sleds and Tire Flips" <?php if($equipment == 'Sleds and Tire Flips') echo 'selected'; ?> >Sleds and Tire Flips</option>
                    </select>
            </fieldset><br>

            <fieldset class="field">
                <legend>How many days can you workout per week?</legend>
                    <select class="sel-rad" name="days">
                        <option  value="1" <?php if($days == '1') echo 'selected'; ?> >1</option>
                        <option  value="2" <?php if($days == '2') echo 'selected'; ?> >2</option>
                        <option  value="3" <?php if($days == '3') echo 'selected'; ?> >3</option>
                        <option  value="4" <?php if($days == '4') echo 'selected'; ?> >4</option>
                        <option  value="5" <?php if($days == '5') echo 'selected'; ?> >5</option>
                        <option  value="6" <?php if($days == '6') echo 'selected'; ?> >6</option>
                        <option  value="7" <?php if($days == '7') echo 'selected'; ?> >7</option>
                    </select>
            </fieldset><br>

            <div id="buttonSet">
            <input type="hidden" value="<?php echo $id?>" name = 'id'>
            
            <input type="submit" id="button1" value = 'Save'>
            
            <a href = 'fitnessData.php'><input type="button" id="button1" value = 'Cancel'></a>

            </div>

        </form>

    </div>
          <br></br>
          <br></br>
        </body>
    </body>
</html>

