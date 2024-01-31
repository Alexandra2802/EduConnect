<?php
include 'config.php';
 $ID = $_GET['Id'];
mysqli_query($con,"DELETE FROM `tutoring_sessions` WHERE id = $ID");

header('location:meditatii.php');

?>