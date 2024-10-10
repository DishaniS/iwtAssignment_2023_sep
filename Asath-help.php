<?php




// check if user is signed in
/*session_start();
if(!isset($_SESSION['user_id'])) {
    // redirect to login page if user is not signed in
    header('Location: help-guest.php');
    exit();
}*/
// include header.php
include('header.php');

?>

<style>
    .help {
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .help-des {
        text-align: center;
    }

    .help-des h1 {
        font-size: 50px;
        font-weight: 700;
        color: #000;
    }

    .help-content {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .help-content h2 {
        font-size: 30px;
        font-weight: 700;
        color: #000;
    }

    .help-content p {
        font-size: 20px;
        font-weight: 400;
        color: #000;
    }
</style>

<div class="container">
    <div class="help">
        <div class="help-des">
            <h1>
                Help
            </h1>
        </div>
        <div class="help-content">
            <h2>
                How to use Fit Coach Pro
            </h2>
            <p>
                Fit Coach Pro is a web application that allows you to manage your gym. You can add new members, trainers, and classes. You can also view the list of members, trainers, and classes. You can also edit and delete members, trainers, and classes.
            </p>
            <h2>
                How to add a new member
            </h2>
            <p>
                To add a new member, click on the "New Member" button on the Members page. Then, fill in the form and click on the "Add Member" button.
            </p>
            <h2>
                How to add a new trainer
            </h2>
            <p>
                To add a new trainer, click on the "New Trainer" button on the Trainers page. Then, fill in the form and click on the "Add Trainer" button.
            </p>
            <h2>
                How to add a new class
            </h2>
            <p>
                To add a new class, click on the "New Class" button on the Classes page. Then, fill in the form and click on the "Add Class" button.
            </p>
            <h2>
                How to view the list of members
            </h2>
            <p>
                To view the list of members, click on the "Members" button on the navigation bar. Then, you will see the list of members.
            </p>
            <h2>
                How to view the list of trainers
            </h2>
            <p>
                To view the list of trainers, click on the "Trainers" button on the navigation bar. Then, you will see the list of trainers.
            </p>
            <h2>
                How to view the list of classes
            </h2>
            <p>
                To view the list of classes, click on the "Classes" button on the navigation bar. Then, you will see the list of classes.
            </p>
            <h2>
                How to edit a member
            </h2>
            <p>
                To edit a member, click on the "Edit" button next to the member you want to edit. Then, fill in the form and click on
                the "Edit Member" button.
            </p>
           
            <h2>
                How to edit a trainer
            </h2>
            <p>
                To edit a trainer, click on the "Edit" button next to the trainer you want to edit. Then, fill in the form and click on
                the "Edit Trainer" button.
            </p>
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>