<?php 

$conn = mysqli_connect("localhost", "root", "", "iwt");

if ($conn == false)
    die("Connection failed: ". mysqli_connect_error());

$sql = "SELECT * FROM trainer";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='trainer-details'>";
    echo "<h3>". "Trainer ID: ". $row['t_ID']. "</h3>";
    echo "<h3>". "Trainer Name: ". $row['t_name']. "</h3>";
    echo "<h3>". "Trainer Email: ". $row['t_email']. "</h3>";
    echo "<h3>". "Trainer Phone: ". $row['t_phoneNo']. "</h3>";
    echo "<h3>". "Trainer Address: ". $row['t_address']. "</h3>";
    echo "<h3>". "Trainer Gender: ". $row['t_gender']. "</h3>";
    echo "<h3>". "Trainer Birthday: ". $row['t_dob']. "</h3>";
    echo "<h3>". "Trainer Status: ". $row['t_position']. "</h3>";
    echo "</div>";
}
?>