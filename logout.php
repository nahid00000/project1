<?php
    $conn = mysqli_connect("localhost","root","","donation") or die("Connection Failed");
    session_start();
    session_unset();
    session_destroy();
    header("Location: labdonation.php");
?>