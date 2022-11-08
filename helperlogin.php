<?php
    if(isset($_POST['login'])) {
        $user_email = $_POST['email'];
        $user_password = md5($_POST['password']);

        $conn = mysqli_connect("localhost","root","","donation") or die("Connection Failed");
        $sql = "SELECT * FROM users where email = '{$user_email}' AND password = '{$user_password}' ";
        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["user_name"] = $row['name'];
                $_SESSION["user_email"] = $row['email'];
                $_SESSION["user_address"] = $row['address'];
                $_SESSION["user_mobile"] = $row['mobile'];
                $_SESSION["user_type"] = $row['user_type'];
                header('location:labdonation.php');
            }
        } else {
            echo "wrong password";
            header('Location: wrong.php');
        }
    }
?>