<?php
session_start();

include 'config.php';

$userName = $_REQUEST['userName'];
$password = $_REQUEST['userInputedPassword'];

$password = sha1($password);

$dataBaseQuery = "SELECT * FROM users WHERE userName = '$userName' AND user_password = '$password';";

mysqli_query($connection ,$dataBaseQuery) or die('There was an error while tring to get your information from the database.');

$_SESSION['user'] = $userName;

header('Location: http://bwm290.webandinteractivemedia.courses/assignmentThree/index.php');
?>