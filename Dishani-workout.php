<?php
session_start();
include "config.php";
include "header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>customized workout plan</title>
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
        <h1>Get Start</h1>
        <h3>Tell us about yourself to create your first custom workout</h3>
        <div id="form_div">
        <form id="cusForm" action="adddata.php" method="post">
            <div id="gender_and_unit_container">
                <div>
                    <h4>Gender</h4>
                    <input type="radio" id="Male" name="gender" value="Male" required>
                    <label for="Male">Male</label>
                    <input type="radio" id="Female" name="gender" value="Female">
                    <label for="Female">Female</label>
                </div>

                <div>
                    <h4>Unit of measurment</h4>
                    <input type="radio" id="lbs" name="uom" value="Lbs">
                    <label for="lbs">Lbs</label>
                    <input type="radio" id="Kgs" name="uom" value="Kgs">
                    <label for="Kgs">Kgs</label>
                </div>
            </div>
            <br><br>

            <fieldset class="field">
                <legend>Body Weight</legend>
                <label for="weight">Enter Weight :</label>
                <input type="number" id="weight" name="weight" min="0" step="0.1" class="weh" required>
            </fieldset><br>

            <fieldset class="field">
                <legend>Fitness Level</legend>
                    <select name="fitnesslevel" id="fitlevel" class="sel-rad">
                        <option value="Select">Select</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                        <option value="Professional">Professional/Eliminate</option>
                    </select>
            </fieldset><br>

            <fieldset class="field">
                <legend>Fitness Goal</legend>
                    <select name="fitnessgoal" id="fitnessgoal" class="sel-rad">
                        <option>Select</option>
                        <option  value="Stress Reduction" >Stress Reduction</option>
                        <option  value="Weight Loss" >Weight Loss</option>
                        <option  value="Muscle Gain" >Muscle Gain</option>
                        <option  value="Cardiovascular Fitness" >Cardiovascular Fitness</option>
                        <option  value="Flexibility and Mobility" >Flexibility and Mobility</option>
                        <option  value="Athletic Performance" >Athletic Performance</option>
                        <option  value="Functional Fitness" >Functional Fitness</option>
                        <option  value="Body Composition" >Body Composition</option>
                        <option  value="Health and Wellness" >Health and Wellness</option>
                        <option  value="Weight Maintenance" >Weight Maintenance</option>
                    </select>
            </fieldset><br>

            <fieldset class="field">
                <legend>Equipment</legend>
                    <select name="equipment" id="equipment" class="sel-rad">
                        <option>Select</option>
                        <option  value="Treadmill" >Treadmill</option>
                        <option  value="Jump Rope" >Jump Rope</option>
                        <option  value="Dumbbells" >Dumbbells</option>
                        <option  value="Kettlebells" >Kettlebells</option>
                        <option  value="Yoga Blocks and Straps" >Yoga Blocks and Straps</option>
                        <option  value="Push up bar" >Push up bar</option>
                        <option  value="Medicine Balls" >Medicine Balls</option>
                        <option  value="Sleds and Tire Flips" >Sleds and Tire Flips</option>
                    </select>
            </fieldset><br>

            <fieldset class="field">
                <legend>How many days can you workout per week?</legend>
                    <select class="sel-rad" name="days">
                        <option>Select</option>
                        <option  value="1" >1</option>
                        <option  value="2" >2</option>
                        <option  value="3" >3</option>
                        <option  value="4" >4</option>
                        <option  value="5" >5</option>
                        <option  value="6" >6</option>
                        <option  value="7" >7</option>
                    </select>
            </fieldset><br>

            <div id="buttonSet">
            
            <input type="submit" id="button1">

            </div>

        </form>

    </div>
          <br></br>
          <br></br>
        </body>
    </html>

<?php 
    include "footer.php";
 ?>

