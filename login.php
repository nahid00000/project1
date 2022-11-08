<html>
<head>
<title>Login Form</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css\login1.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>

<div class="form-box">
    
    <h2>Login Here</h2>
    <form action="helperLogin.php" method="POST">
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Enter Email ID">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password">
        </div>
        <button type="submit" name="login" value="Log In">submit</button>
</form>
<br>
   if You don't have account,please<br>
   <br><p><a href="signup.php">Sign Up</a></p>

    
    
</div>
    
    
</body>
</html>