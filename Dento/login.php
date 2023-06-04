<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $username = $_POST["username"];
    $password = $_POST["password"];

 
    if ($username == "admin" && $password == "admin123") {
       
        header("Location: admin.html");
        exit;
    } else {
        
        echo "Invalid username or password.";
    }
}
?>
