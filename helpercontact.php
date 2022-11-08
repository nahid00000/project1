<?php 
	if(isset($_POST['submit-btn'])){
		$user_name = $_POST['name'];
		$user_email = $_POST['email'];
		$user_address = $_POST['address'];
		$user_message = ($_POST['message']);
		$user_type = 0;

		$conn = mysqli_connect("localhost","root","","donation");
		if(!$conn) {
			die("<script>alert('Connection Failed.')</script>");
		}
		$sql = "INSERT INTO contact(name,email,address,message) VALUES ('{$user_name}','{$user_email}','{$user_address}','{$user_message}')";
		$result = mysqli_query($conn, $sql);
		header("Location: thank.php");
		mysqli_close($conn);
	}
 ?>