
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css\signup1.css" />
  </head>
  <body>
    <div class="xx">
    <div class="signup-box">
      <h1>Sign Up</h1>
    <form action="helperSignup.php" method="POST">
			<label>User Name</label>
			<input type="text" name="name" placeholder="Enter User Name" required>
			<label>Email ID</label>
			<input type="email" name="email" placeholder="Enter Email ID" required>
			<label>Mobile Number</label>
			<input type="text" name="mobile" placeholder="Enter Mobile Number" required>
			<label>Address</label>
			<input type="text" name="address" placeholder="Enter address" required>
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password" required>
			<input type="submit" name="submit-btn" value="submit"/> 
      
		</form>
   
    </div>
    </div>
  </body>
</html>


