<?php
    include"config.php";
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("Location: dhanushiLogin.php");
        exit();
    }
    include "header.php";
?>

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

        input[type="text"] {
            background: transparent; 
            color: #333; 
            border: none; 
            outline: none; 
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            font-size: 16px;
        }

        .container22 .heading {
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

        .container22 table {
            margin-top: 20px; 
            margin-bottom: 20px; 
        }

        
        .container22 table tr {
            margin-bottom: 10px; 
        }
        .container22 table td {
            padding: 3px; 
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
    <header>
    </header>
    <main>
        <div class="container22">
        <?php
            $member_id = $_SESSION['id'];
                $sql = "SELECT * FROM member WHERE member_ID = '$member_id'";
                $result = mysqli_query($conn, $sql);
        
                if ($result->num_rows > 0) 
                {
                    $row = mysqli_fetch_assoc($result);
                    $member_name = $row['member_name'];
                }
        ?>

            <h1 class="heading">Hello <?php echo $member_name?></h1>

            <p>This is your profile page.</p><br>

            <div class="profile">
                <h3 class="title">Personal Details</h3>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="<?php echo $row['username'];?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Member ID</td>
                        <td><input type="text" name="member_id" value="<?php echo $row['member_ID']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="member_name" value="<?php echo $row['member_name']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>NIC</td>
                        <td><input type="text" name="member_nic" value="<?php echo $row['NIC']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input type="text" name="gender" value="<?php echo $row['gender']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" value="<?php echo $row['address']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="member_email" value="<?php echo $row['member_email']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><input type="text" name="member_dob" value="<?php echo $row['date_of_birth']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type="text" name="member_age" value="<?php echo $row['age']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Contact No</td>
                        <td><input type="text" name="phone_no" value="<?php echo $row['contact_no']; ?>" readonly></td>
                    </tr>
                </table>
                <hr><br>
                <table>
                    <h3 class="title">Physical Details</h3>
                    <tr>
                        <td>Height</td>
                        <td><input type="text" name="height" value="<?php echo $row['height'].'  cm'; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td><input type="text" name="weight" value="<?php echo $row['weight'].'  kg'; ?>" readonly></td>
                    </tr>
                </table>
            </div>
            <hr><br>
               <button><a href="dhanushiUpdate.php">Edit Profile</a></button>
               <button><a href="dhanushiDelete.php">Delete Profile</a></button>
               <button><a href="Asath-dashboard.php">Back</a></button>
            </div>
            
    </main>
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>