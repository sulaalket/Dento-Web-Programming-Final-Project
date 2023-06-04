<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm-password"];

 
  $namePattern = "/^[a-zA-Z]+$/";
  $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

 
  $errors = array();

  if (!preg_match($namePattern, $name)) {
    $errors[] = "Invalid name. Only alphabetic characters are allowed.";
  }

  if (!preg_match($namePattern, $surname)) {
    $errors[] = "Invalid surname. Only alphabetic characters are allowed.";
  }

  if (!preg_match($emailPattern, $email)) {
    $errors[] = "Invalid email address.";
  }

  if (strlen($password) < 8) {
    $errors[] = "Password must be at least 8 characters long.";
  }

  if ($password !== $confirmPassword) {
    $errors[] = "Passwords do not match.";
  }


  if (empty($errors)) {
    
   
    header("Location: login.html");
    exit;
  }
}
?>
