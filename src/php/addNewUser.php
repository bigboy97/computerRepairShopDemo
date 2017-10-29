<?php
session_start();

include 'config.php';

$userName = $_REQUEST['userName'];
$fullName = $_REQUEST['fullName'];
$password = $_REQUEST['userInputedPassword'];
$email = $_REQUEST['userEmail'];

$password = sha1($password);

$dataBaseQuery = "INSERT INTO users (userName, fullName, emailAdd, user_password)
VALUES ('" . $userName . "', '" . $fullName . "', '" . $email . "', '" . $password . "');";

mysqli_query($connection ,$dataBaseQuery) or die('There was an error while tring to insert your information into the database.');

$_SESSION['user'] = $userName;

header('Location: http://bwm290.webandinteractivemedia.courses/assignmentThree/index.php');
?>