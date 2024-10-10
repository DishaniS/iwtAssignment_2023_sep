<?php
        include "header.php";
        include"config.php";
        session_start();
        if(!isset($_SESSION['name']))
        {
            header("Location: dhanushiLogin.php");
            exit();
        }
?>
         
         <!DOCTYPE html>
         <html lang="en">
         <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                fieldset, p {
                    color: white;
                    margin: 0 auto;
                    width: 500px;
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
                margin: 10px;
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
            </style>
         </head>
         <body>          
                    <fieldset>
                    <legend><h2>Personal Details</h2></legend>
                    <?php
                    
                        echo "Name: ".$_POST['name']."<br>";
                        echo "Date: ".$_POST['date']."<br>";
                        echo "Trainer: ".$_POST['trainer']."<br>";
                        echo "Duration: ".$_POST['duration']."<br>";
                        echo "Exercise ".$_POST['exercise']."<br>";
                        $equipment = isset($_POST["equipment"]) ? "Yes" : "No";
                        echo "Equipment: ".$equipment."<br>";
                    ?> 
                </fieldset>
                <div class="confirmation" id="confirmation">
                    <p>Thank you for booking with us!</p>
                    <p>Your request is being processed. Please wait for confirmation.</p>
                    <button type="button" id="back1"><a href="Asath-dashboard.php">Back</a></button>
                </div>
                <footer>
                    <?php include "footer.php"; ?>
                </footer>
                </body>
         </html>