<?php
    include"config.php";
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("Location: dhanushiLogin.php");
        exit();
    }
     include "header.php";
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>

        .container22 {
            background: linear-gradient(to top, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 700px;
            margin: 0 auto;
        }

        .container22 h1 {
            font-weight: bold;
            position: relative;
            padding-bottom: 20px;
            background-image: linear-gradient(-225deg, #A445B2 0%, #D41872 52%, #FF0066 100%);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-text-fill-color: transparent;
            font-size: 2rem;
        }

        button {
            width: 150px;
            height: 35px;
            outline: none;
            color: aliceblue;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            letter-spacing: 1px;
            background: linear-gradient(to top, #cc208e 0%, #6713d2 100%);
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(90.5deg, rgb(250, 156, 245) 1.6%, rgb(182, 76, 233) 98.2%);
            color: aliceblue;
        }

        button > a {
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%; 
            height: 100%; 
            color: aliceblue;
        }
        .container22 {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select, {
            width: 500px;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        label.checkbox-label {
            display: inline-flex;
            align-items: center;
        }
        input[type="checkbox"] {
            margin: 0 5px 0 0;
        }
        .confirmation {
            text-align: center;
            display: none;
            margin-top: 20px;
        }
        .session-details {
            background: #f9f9f9;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 3px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
    </header>
    <main>
        <div class="container22">
       
        <h1>Book a Trainer</h1>
        <form id="booking-form" action="dhanushiDisplay.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <label for="date">Select Date:</label>
            <input type="date" name="date" required>
            <label for="trainer">Select Trainer:</label>
            <select name="trainer" required>
                <option value="duration3">--Choose--</option>
                <option value="trainer1">Dwayne Johnson</option>
                <option value="trainer2">Tom Cruise</option>
                <option value="trainer2">Angelina Jolie</option>
                <option value="trainer2">Brad Pitt</option>
                <option value="trainer2">Jennifer Lawrence</option>
                
            </select>
            <label for="duration">Session Duration (in minutes):</label>
            <select name="duration" required>
                <option value="duration3">--Choose--</option>
                <option value="90 minutes">90 minutes</option>
                <option value="120 minutes">120 minutes</option>
                <option value="300 minutes">300 minutes</option>
            </select>
            <label for="exercise">Type of Exercise:</label>
            <select name="exercise" required>
                <option value="duration3">--Choose--</option>
                <option value="duration1">HIIT</option>
                <option value="duration2">Yoga</option>
                <option value="duration3">Pilates</option>
                <option value="duration3">Calisthenics</option>
                <option value="duration3">Strength Training</option>
            </select><br><br>
            <label for="equipment" class="checkbox-label">
                <input type="checkbox" name="equipment">
                With Equipment
            </label><br><br>
            <button type="submit" name="book-btn">Book Now</button>
            <button type="button" id="back1"><a href="Asath-dashboard.php">Back</a></button>
        </form>
            <br><br>
            
    </main>
 
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>