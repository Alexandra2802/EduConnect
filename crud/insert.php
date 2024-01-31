<?php
// include db connection
include '../connection/config.php';

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $SUBJECT = $_POST['subject'];
    $DURATION = $_POST['duration'];
    $PRICE = $_POST['price'];
    $CONTACT = $_POST['contact'];

    // insert data
    $SUBJECT = $_POST['subject'];
    mysqli_query($con,"INSERT INTO `tutoring_sessions`( `teacher_name`,`subject`,`duration`, `price`,`contact`) VALUES ('$NAME','$SUBJECT','$DURATION','$PRICE','$CONTACT')");
    header("location:../pages/meditatii.php");

}

?>