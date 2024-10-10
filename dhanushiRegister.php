<?php

if(isset($_POST['submit']))
{   
    include "config.php";

    $member_name = $_POST['name'];
    $member_email = $_POST['email'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['dob']; 
    $age = $_POST['age'];
    $contact_no = $_POST['phone'];
    $NIC = $_POST['nic'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-pwd'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
 
    // $sql = "SELECT * from member WHERE username='$username';";
    // $result = mysqli_query($conn, $sql);
    // if ($result->num_rows > 0) 
    // {
    //     echo "<script>alert('Username already taken');</script>";
    //     header("Location: dhanushiRegister.html");
    // }

    // Check if the username is already taken
    $stmt = $conn->prepare("SELECT * from member WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: dhanushiUsernameTaken.html");
        echo "<script>alert('Username already taken');</script>";
        exit();
    } 

    else 
    {
        // Create an SQL insert query
        $sql = "INSERT INTO member (member_name, member_email, address, date_of_birth, age, contact_no, NIC, gender, username, password, confirm_password, height, weight)
                VALUES ('$member_name', '$member_email', '$address', '$date_of_birth', '$age', '$contact_no', '$NIC', '$gender', '$username', '$password', '$confirm_password', '$height', '$weight');";

        // Execute the query
        if (mysqli_query($conn, $sql)) 
        {
            echo "<script>alert('Record inserted successfully')</script>";

        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        header("Location: dhanushiLogin.php");
    }
    $stmt->close();

// Close the database connection
mysqli_close($conn);
}
?>


