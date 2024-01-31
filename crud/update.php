<?php
include '../connection/config.php';
if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $NAME = $_POST['name'];
    $SUBJECT = $_POST['subject'];
    $DURATION = $_POST['duration'];
    $PRICE = $_POST['price'];
    $CONTACT = $_POST['contact'];

    mysqli_query($con,"UPDATE `tutoring_sessions` SET `teacher_name`='$NAME',`subject`='$SUBJECT',`duration`='$DURATION',`price`='$PRICE',`contact`='$CONTACT' WHERE id = '$ID' ");
    header("location:../pages/meditatii.php");

}
?>