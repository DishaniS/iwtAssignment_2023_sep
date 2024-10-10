<?php
    include "config.php";
    session_start();

    if(!isset($_SESSION['name']))
    {
        header("Location: dhanushiLogin.php");
        exit();
    }
?>
<html>
    <head>
        <title>
            Admin Panel
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/Asath-admin.css">
        <style>
            .logout{
                position: absolute;
                top: 0;
                right: 0;
                padding: 10px;
            }
            .logout button{
                background-color: rgb(255, 255, 255, 0.2);
                border: 1px solid black;
                border-radius: 10px;
                padding: 5px;
                margin: 5px;
                color: white;
                font-weight: bold;
                font-size: 16px;
            }
            .logout button:hover{
                background-color: rgb(176, 186, 181);
                color: black;
                border-radius: 20px;
                transition:0.3s;
            }

        </style>

    </head>
    <body>
        <div class="logout">
            <a href="dhanushiLogout.php">
                <button >
                    Logout
                </button>
            </a>
        </div>
        <div class="status">
            <div class="system-text">
                <h1>
                    System Status
                </h1>
            </div>
            <div class="system-tables">
                <div class="trainer-status">
                    <?php
                        include "config.php";
                        $sql = "SELECT COUNT(t_ID) AS total FROM trainer";
                        $result = mysqli_query($conn, $sql);
                        $values = mysqli_fetch_assoc($result);
                        $num_rows = $values['total'];
                        echo "<h1>Trainer</h1>";
                        echo "<h2>Total: $num_rows</h2>";
                    ?>
                </div>
                <div class="report-status">
                    <?php
                        $sql = "SELECT COUNT(rep_ID) AS total FROM report";
                        $result = mysqli_query($conn, $sql);
                        $values = mysqli_fetch_assoc($result);
                        $num_rows = $values['total'];
                        echo "<h1>Report</h1>";
                        echo "<h2>Total: $num_rows</h2>";
                    ?>
                </div>
                <div class="user-status">
                    <?php
                    
                        $sql = "SELECT COUNT(member_ID) AS total FROM member";
                        $result = mysqli_query($conn, $sql);
                        $values = mysqli_fetch_assoc($result);
                        $num_rows = $values['total'];
                        echo "<h1>User</h1>";
                        echo "<h2>Total: $num_rows</h2>";
                        
                        
                    ?>
                </div>
            </div>
        </div>
        <div class="trainer">
            <div class="trainer-des">
                <h1>
                    Trainer Management
                </h1>
            </div>
            <div class="new-trainer-button">
                <a href="new-trainer.html">
                    <button>
                        New Trainer
                    </button>
                </a>
            </div>
            <div class="trainer-table">
                <table>
                    <thead>
                        <tr>
                            <th>Trainer ID</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Address</th>
                            <th> Gender</th>
                            <th> Birthday</th>
                            <th> Position</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM trainer";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>". $row['t_ID']. "</td>";
                            echo "<td>". $row['t_name']. "</td>";
                            echo "<td>". $row['t_email']. "</td>";
                            echo "<td>". $row['t_phoneNo']. "</td>";
                            echo "<td>". $row['t_address']. "</td>";
                            echo "<td>". $row['t_gender']. "</td>";
                            echo "<td>". $row['t_dob']. "</td>";
                            echo "<td>". $row['t_position']. "</td>";
                            echo "<td><a href='edit-trainer.php?id=". $row['t_ID']. "'>Edit</a>";
                            echo " ";
                            echo "<a href='delete-trainer.php?id=". $row['t_ID']. "'>delete</a></td>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                        ?>    
        </div>
        <div class="report">
            <div class="report-des">
                <h1>
                    Report Management
                </h1>
            </div>
            <div class="report-table">
                <table>
                    <thead>
                        <tr>
                            <th>Report ID</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Message</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM report";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>". $row['rep_ID']. "</td>";
                            echo "<td>". $row['name']. "</td>";
                            echo "<td>". $row['email']. "</td>";
                            echo "<td>". $row['message']. "</td>";
                            echo "<td><a href='delete-report.php?id=". $row['rep_ID']. "'>delete</a></td>";
                        }
                        
                        echo "</tbody>";
                        echo "</table>"; 
                        ?>
            </div>
        </div>
        <div class="user">
            <div class="user-des">
                <h1>
                    User Management
                </h1>
            </div>
            <div class="user-table">
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Password</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM member";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>". $row['member_ID']. "</td>";
                            echo "<td>". $row['member_name']. "</td>";
                            echo "<td>". $row['member_email']. "</td>";
                            echo "<td>". $row['password']. "</td>";
                            echo "<td><a href='delete-user.php?id=". $row['member_ID']. "'>delete</a></td>";
                        }
                        mysqli_close($conn);
                        echo "</tbody>"; 
                        ?>
                </table>
    </body>
</html>