<?php
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
    <title>Delete Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body {
            background: url('images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Center vertically */
            margin: 0;
        }

        .container {
            background: linear-gradient(to top, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 700px;
        }

        .container .heading {
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
    <div class="container">
        <form action="dhanushiDelete.php" method="get">
            <h2>Are you sure you want to delete your profile?</h2><br>
            <button name="Yes">Yes</button>
            <button name="No">No</button>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_GET['Yes']))
    {
        $member_id = $_SESSION['id'];
        $sql = "SELECT * FROM member WHERE member_ID = '$member_id'";
        $result = mysqli_query($conn, $sql);
            
        if ($result->num_rows > 0) 
        {
            $row = mysqli_fetch_assoc($result);
        }

        $query = "DELETE from member WHERE member_ID='$member_id'";

        if (mysqli_query($conn, $query)) 
        {
            echo "<script>alert('Record deleted successfully')</script>";
            header("Location: dhanushiLogin.php");
            session_destroy();
        }
        else 
        {
            echo "Error deleting record: ". $conn->error;
        }
    }
    else if(isset($_GET['No']))
    {
        header("Location: dhanushiViewProfile.php");
    }
?>
