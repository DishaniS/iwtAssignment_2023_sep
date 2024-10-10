<?php
include "config.php";
session_start();

if(!isset($_SESSION['name']))
{
    header("Location: dhanushiLogin.php");
    exit();
}
include("header.php");

?>

<style>
    .contact-us-page{
        padding: 5px;
        margin: 5px;
    }
    .contact-us-heading{
        padding: 5px;
    }
    .contact-us-heading h1{
        text-align: center;
    }
    .contact-us-form{
        padding: 5px;
    }
    .contact-us-form-name{
        padding: 5px;
    }
    .contact-us-form-name label{
        padding: 5px;
    }
    .contact-us-form-name input{
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid black;
    }
    .contact-us-form-email{
        padding: 5px;
    }
    .contact-us-form-email label{
        padding: 5px;
    }
    .contact-us-form-email input{
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid black;
    }
    .contact-us-form-message{
        padding: 5px;
    }
    .contact-us-form-message label{
        padding: 5px;
    }
    .contact-us-form-message textarea{
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid black;
    }
    .contact-us-form-submit{
        padding: 5px;
    }
    .contact-us-form-submit input{
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid black;
        background-color: rgb(176, 186, 181);
        color: black;
        font-weight: bold;
        font-family: 'Pacifico', cursive;
        font-size: 1.1rem;
    }
    .contact-us-form-submit input:hover{
        background-color: rgb(9, 9, 9);
        color: white;
        border-radius: 20px;
        transition:0.3s;
    }
    .contact-us-details{
        padding: 5px;
    }
    .contact-us-details-heading{
        padding: 5px;
    }
    .contact-us-details-heading h1{
        text-align: center;
    }
    .contact-us-details-content{
        padding: 5px;
    }
    .contact-us-details-content-email{
        padding: 5px;
    }
    .contact-us-details-content-email h2{
        padding: 5px;
    }
    .contact-us-details-content-email p{
        padding: 5px;
    }
    .contact-us-details-content-email a{
        text-decoration: none;
        color: black;
        padding: 5px;
        border-radius: 20px;
        transition:0.3s;
    }
    .contact-us-details-content-email a:hover{
        background-color: rgb(176, 186, 181);
        color: black;
        padding: 5px;
        border-radius: 20px;
        transition:0.3s;
    }
</style>

<div class="contact-us-page">
    <div class="contact-us-heading">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-us-form">
        <form action="submit-contact-us.php" method="post">
            <div class="contact-us-form-name">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="contact-us-form-email">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="contact-us-form-message">
                <label for="message">Message</label>
                <textarea name="message" cols="30" rows="10" placeholder="Enter your message" required></textarea>
            </div>
            <div class="contact-us-form-submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="contact-us-details">
        <div class="contact-us-details-heading">
            <h1>Contact Details</h1>
        </div>
        <div class="contact-us-details-content">
            <div class="contact-us-details-content-email">
                <h2>Email</h2>
                <p> 
                    <a href="mailto:abc@email.com"> abc@email.com</a>
                </p>
                <h2>Phone</h2>
                <p>
                    <a href="tel:+1234567890"> +1234567890</a>
                </p>
                <h2>Address</h2>
                <p>
                    1234 Main Street, <br>
                    City, State 12345
                </p>
                <h2>Hours</h2>
                <p>
                    Monday - Friday: 9:00am - 5:00pm <br>
                    Saturday: 10:00am - 4:00pm <br>
                    Sunday: Closed
                </p>
                <h2>Social Media</h2>
                <p>
                    <a href="https://www.facebook.com/" target="_blank">Facebook</a> <br>
                    <a href="https://www.instagram.com/" target="_blank">Instagram</a> <br>
                    <a href="https://www.twitter.com/" target="_blank">Twitter</a> <br>
                    <a href="https://www.youtube.com/" target="_blank">YouTube</a>
                </p>
            </div>
        </div>
    </div>            
</div>


<?php

include("footer.php");

?>