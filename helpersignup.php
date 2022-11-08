<?php 
	if(isset($_POST['submit-btn'])){
		$user_name = $_POST['name'];
		$user_email = $_POST['email'];
		$user_mobile = $_POST['mobile'];
		$user_address = $_POST['address'];
		$user_password = md5($_POST['password']);
		$user_type = 0;

		$conn = mysqli_connect("localhost","root","","donation");
		if(!$conn) {
			die("<script>alert('Connection Failed.')</script>");
		}
		$sql = "INSERT INTO users(name,email,mobile,address,password) VALUES ('{$user_name}','{$user_email}','{$user_mobile}','{$user_address}','{$user_password}')";
		$result = mysqli_query($conn, $sql);
		header("Location: login.php");
		mysqli_close($conn);
	}
 ?>