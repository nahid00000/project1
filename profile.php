<?php
include'config.php';
session_start();
if(isset($_POST['logout'])){
    header("Location: logout.php");
}
if(isset($_POST['back'])){
    header("Location: labdonation.php");
}
if(isset($_POST['donation'])){
    header("Location: donation.php");
}
?>
<html>
<head>
 <title>profile</title>
 <link href="css/profilestyle.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
 <div class="log-box">
 <img class="usrimg" src="image/pro.png" />
 <h2>
Profile</h2>
<form action="profile.php" method="post">
    <p>Name:<?php echo $_SESSION["user_name"] ?><br><br><br>
        Email:<?php echo $_SESSION["user_email"] ?> <br><br><br>
        Address:<?php echo $_SESSION["user_address"] ?> <br><br><br>
        Contact number: <?php echo $_SESSION["user_mobile"] ?><br><br>
       </p>
       <button type="submit" name="logout" value="Log out">Log Out</button>
       <button type="submit" name="donation" value="Go to Donation">Donation</button>
       
      <p> <br></p>
      <button type="submit" name="back" value="Go to home">Go to home</button>
 </form>
</div>
</body>
</html>
