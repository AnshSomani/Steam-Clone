<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='font-size: 20px; display: flex; justify-content: center; align-items: center; background-color: lightgreen; padding 2rem; height: 10vh; margin: 0'><b>Successfully registered! </b> Welcome, you can go back and login to enter the website!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}