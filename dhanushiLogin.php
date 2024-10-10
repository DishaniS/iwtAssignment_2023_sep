<?php
session_start();
include "config.php";

if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = "SELECT * from member WHERE username='$uname';";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPwd = $row['password'];

        if ($uname === "admin" && $pwd == 123) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['member_name'];
            $_SESSION['id'] = $row['member_ID'];
            header("Location: Asath-admin.php");
        } else if ($pwd == $storedPwd) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['member_name'];
            $_SESSION['id'] = $row['member_ID'];
            header("Location: Asath-dashboard.php");
        } else {
            echo '<script>alert("Invalid username or password. Please try again.")</script>';
        }
    } else {
        echo '<script>alert("Invalid username or password. Please try again.")</script>';
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      lOGIN
    </title>
    <link rel="stylesheet" type="text/css" href="style/Deshitha-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-image: url("images/bg.jpg");
        background-color: rgba(255 ,255 ,255 ,0.5);
        background-blend-mode: multiply;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
      }
      body::before {
        content: "";
        background-image: url("images/bg.jpg");
        opacity: 0.3;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
      }
      .login{
        position: absolute;
        top: 50%;
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
      .login h1{
        color: #fff;
        text-transform: uppercase;
        font-weight: 500;
      }
      .login input[type="text"], .login input[type="password"]{
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
      .login input[type="text"]:focus, .login input[type="password"]:focus{
        width: 280px;
        border-color: #2ecc71;
      }
      .login input[type="submit"]{
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
      .login input[type="submit"]:hover{
        background: #2ecc71;
      }
      .login a{
        color: #fff;
        text-decoration: none;
      }
      .login a:hover{
        text-decoration: underline;
      }
      .sitename{
        position: absolute;
        top: 10%;
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
      .sitename h1{
        color: #fff;
        text-transform: uppercase;
        font-weight: 500;
      }
      .register-button{
        position: absolute;
        top: 90%;
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
      .register-button button{
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
      .register-button button:hover{
        background: #2ecc71;
      }

    
      
    </style>
  </head>
  <body>
    <div class="sitename">
      <h1>FLEXIT</h1>
    </div>
    <div class="login">
      <h1>Login</h1>
      <form action="dhanushiLogin.php" method="post">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login" name="submit">
      </form>
    </div>  
    <div class="register-button">
      <a href="dhanushiRegister.html">
        <button>
          Register
        </button>
      </a>
    </div>
      
    </body>
      
</html>
