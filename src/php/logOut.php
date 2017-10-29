<?php
session_start();
session_unset();
session_destroy();
header('Location: http://bwm290.webandinteractivemedia.courses/assignmentThree/index.php');
?>