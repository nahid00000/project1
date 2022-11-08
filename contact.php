<?php
include'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="css/contactstyle.css">
	
</head>
<body>
	<div class="container">
			
			<div class="right">
				<h2>Contact Us</h2>
				<form action="helpercontact.php" method="POST"> 
			    <input type="text" name="name"class="field" placeholder="Enter User Name" required>
				<input type="email" name="email"class="field" placeholder="Enter Email ID" required>
				<input type="text" name="address"class="field" placeholder="Enter address" required>
                <input type="message" name="message" placeholder="message" class="field" required>
				<input type="submit" name="submit-btn"class="btn" value="send">
				<p><br><a href ="labdonation.php" class="bt">Go to home</a></p>
			</form>
			</div>
		
	</div>
</body>
</html>