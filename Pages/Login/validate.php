<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username= $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location:/Pages/Home/home.html"); 
        exit();
    } else {
        echo "<script>alert('password not registered. Please sign up.');</script>";
    }
}
$conn->close();