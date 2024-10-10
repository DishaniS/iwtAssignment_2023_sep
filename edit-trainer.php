<?php
    include ("config.php"); 

    $id = $_GET['id'];
    $sql = "SELECT * FROM trainer WHERE t_ID='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['t_name'];
    $email = $row['t_email'];
    $phone = $row['t_phoneNo'];
    $address = $row['t_address'];
    $gender = $row['t_gender'];
    $dob = $row['t_dob'];
    $position = $row['t_position'];
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Trainer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script/Asath-script.js"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #49545e;
        }
        .new-trainer{
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #363232;
            text-align: center;
            width: 500px;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 6px;
            box-shadow: 0 0 10px #000;
        }
        .new-trainer h1{
            color: #fff;
            text-transform: uppercase;
            font-weight: 500;
        }
        .new-trainer input[type="text"], .new-trainer input[type="email"], .new-trainer input[type="password"]{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .new-trainer input[type="text"]:focus, .new-trainer input[type="email"]:focus, .new-trainer input[type="password"]:focus{
            width: 280px;
            border-color: #2ecc71;
        }
        .new-trainer input[type="submit"]{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .new-trainer input[type="submit"]:hover{
            background: #2ecc71;
        }
        .new-trainer a{
            color: #3498db;
            text-decoration: none;
        }
        .new-trainer a:hover{
            color: #fff;
        }
        .new-trainer select{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .new-trainer select:focus{
            width: 280px;
            border-color: #2ecc71;
        }
        .new-trainer input[type="date"]{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .new-trainer input[type="date"]:focus{
            width: 280px;
            border-color: #2ecc71;
        }

    </style>
</head>
<body>

<div class="new-trainer">
    <h1>Edit Trainer</h1>
    <?php echo  '<form name="new-trainer" method="POST"' . 'onsubmit="return validateForm()"' . ' action="do-edit-trainer.php?id='. $id . '">'; ?>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="<?php echo "$name"; ?>"  value = "<?php echo "$name"; ?>">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="<?php echo "$email"; ?>" value = "<?php echo "$email"; ?>">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="<?php echo "$phone"; ?>" value = "<?php echo "$phone"; ?>">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="<?php echo "$address";?>" value = "<?php echo "$address";?>">
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="Female" <?php if($gender=="Female") echo "selected"; ?>>Female</option>
            <option value="Male" <?php if($gender=="Male") echo "selected"; ?> >Male</option>
        </select>
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" placeholder="<?php echo "$dob";?>" value = "<?php echo "$dob";?>">
        <label for="position">Position</label>
        <select name="position" id="position" required>
            <option value="Head-Trainer" <?php if($position == "Head-Trainer") echo "selected"; ?>>Head-Trainer</option>
            <option value="Manager-Trainer" <?php if($position == "Manager-Trainer") echo "selected"; ?>>Manager-Trainer</option>
            <option value="Assistant-Trainer" <?php if($position == "Assistant-Trainer") echo "selected"; ?>>Assistant-Trainer</option>
            <option value="Instructor-Trainer" <?php if($position == "Instructor-Trainer") echo "selected"; ?>>Instructor-Trainer</option>
        </select>
        <input type="hidden" name="id" id="id" value = "<?php echo "$id";?>">
        <input type="submit" value="edit">
        <a href="Asath-admin.php">Cancel</a>
    </form>
    <script>
        function validateForm() {
            var phone = document.getElementById("phone").value;

            // Phone number validation (10 digits)
            var phoneRegex = /^\d{10}$/;
            if (!phone.match(phoneRegex)) {
                alert("Phone number must be 10 digits.");
                return false;
            }

        
            return true;
        }
    </script>
</div>
</div>

</body>

</html>