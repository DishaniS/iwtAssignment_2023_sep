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
    <title>My Profile</title>
    <script src="check.js"></script>
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
    margin: 0;
}

.container {
    background: linear-gradient(to top, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 700px;
}

.details {
    background: transparent; 
    color: #333; 
    border: none; 
    outline: none; 
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    font-size: 16px;
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
    font-size: 1.5rem;
}

.container table {
    margin-top: 20px; 
    margin-bottom: 
}


.container table tr {
    margin-bottom: 10px; 
}
.container table td {
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
        <div class="container">
            <h1 class="heading">Edit Profile</h1>
            <div class="profile">
            <form action="dhanushiUpdate.php" method="POST" onsubmit="return handleSubmit(event)">
                <h3>Personal Details</h3>
                <table>
                    <tr>
                        <td>Member ID</td>
                        <td><input type="text" name="member_id" value="<?php echo $row['member_ID']; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="member_name" value="<?php echo $row['member_name']; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>NIC</td>
                        <td><input type="text" name="member_nic" value="<?php echo $row['NIC']; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input type="text" name="gender" value="<?php echo $row['gender']; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" value="<?php echo $row['address']; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="member_email" value="<?php echo $row['member_email'];?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><input type="text" name="member_dob" value="<?php echo $row['date_of_birth']; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type="text" name="member_age" value="<?php echo $row['age']; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" readonly class="details"></td>
                    </tr>
                </table>
                <hr><br>
                <h3>Physical Details</h3>
                <table>
                    <tr>
                        <td>Height</td>
                        <td><input type="text" name="height" value="<?php echo $row['height'].' cm'; ?>" readonly class="details"></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td><input type="text" name="weight" value="<?php echo $row['weight']; ?>"> kg</td>
                    </tr>
                </table>
                <hr><br>
                <table>
                    <h3>Account Details</h3>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="<?php echo $row['username'];?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="<?php echo $row['password'];?>"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="confirm_password" value="<?php echo $row['confirm_password'];?>"></td>
                    </tr>
                </table>
            <hr><br>
            <button name="update">Update</a></button>
            <button><a href="dhanushiViewProfile.php">Back</a></button>
            </form>
            </div>

            <?php
                    if (isset($_POST['update']))
                    {
                        $phoneNo = $_POST['contact_no'];
                        $height = $_POST['height'];
                        $weight = $_POST['weight'];
                        $password1 = $_POST['password'];
                        $password2 = $_POST['confirm_password'];
                
                        $sql = "UPDATE member 
                        SET contact_no = '$phoneNo', height = '$height', weight = '$weight', password = '$password1', confirm_password = '$password2'
                        WHERE member_ID = '$member_id'";
                    
                
                    if (mysqli_query($conn, $sql)) 
                    {
                        echo "<script>alert('Record updated successfully')</script>";
                        echo "<script>window.location.href = 'dhanushiViewProfile.php'</script>";
                        //header("Location: dhanushiViewProfile.php");
                        exit;
                    } 
                    else 
                    {
                        echo "<script>alert('Failed')</script>" . mysqli_error($conn);
                    }
                }
            ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>