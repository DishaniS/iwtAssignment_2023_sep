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
    <title>About Us</title>
    <style>
        h1 {
            color: #fff;
            text-transform: uppercase;
            margin-top: 50px;
            margin-left: 100px;
        }
        .sub-heading {
            color: #fff;
            margin-left: 150px;
            font-weight: bold;
            font-size: 25px;
            font-family: 'Brush Script MT';
        }
        .mission-container {
        display: flex;
        justify-content: center; 
        max-width: 1000px;
        width: 100%;
        margin: 0 auto; 
    }

    .mission {
        flex: 1; 
        padding: 30px;
        border-radius: 25px;
        background-color: rgba(255,255,255,0.65);
        text-align: center; 
        margin: 20px; 
        }
        .services-container {
        display: flex;
        justify-content: center;
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
    }

    .service {
        flex: 1;
        padding: 20px;
        border-radius: 25px;
        background-color: white;
        opacity: 0.8;
        text-align: center;
        margin: 20px;
    }

    .service .icon {
        width: 60px;
        height: 60px;
        margin: 0 auto;
    }

    .service .icon img {
        width: 100%;
        height: 100%;
    }

    h4 {
        margin: 10px 0;
        color: #333;
    }

    p {
        color: black;
    }


    </style>
</head>
<body>
    <header></header>
    <main>
        <div class="main-home">
            <div class="inner-content">
                <h1>MAKE YOUR BODY BEAUTIFUL</h1>
                <p class="sub-heading">We create and give you perfect training.</p>
            </div>
            <div class="mission-container">
                <div class="mission" id="mission">
                    <h4>MISSION</h4><br>
                    <p>At Flexit, our mission is to empower individuals to take control of their health and well-being by providing accessible, personalized, and effective fitness solutions. We are committed to helping our clients achieve their fitness goals, whether it's losing weight, building strength, or improving overall health.</p>
                </div>
                <div class="mission" id="vision">
                    <h4>VISION</h4><br>
                    <p>Our vision is to revolutionize the way people approach fitness and wellness. We envision a world where fitness is not just a temporary fix but a sustainable and enjoyable part of life. We see a future where individuals of all backgrounds and fitness levels can access top-tier training and guidance from the comfort of their homes.</p>
                </div>
            </div>
            <br><br>
            <h1>SERVICES OFFERED</h1>
            <div class="services-container">
                <div class="service">
                    <div class="icon">
                        <img src="images/icon1.png" alt="Service 1">
                    </div>
                    <h4>Service 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service">
                    <div class="icon">
                        <img src="images/icon2.png" alt="Service 2">
                    </div>
                    <h4>Service 2</h4>
                    <p>Nullam bibendum odio vel metus tristique, eu aliquam.</p>
                </div>
                <div class="service">
                    <div class="icon">
                        <img src="images/icon3.png" alt="Service 3">
                    </div>
                    <h4>Service 3</h4>
                    <p>Praesent aliquam eros nec tortor tempor facilisis.</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>
</html>
