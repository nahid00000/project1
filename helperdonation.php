<?php 
	if(isset($_POST['submit-btn'])){
		$user_name = $_POST['name'];
		$user_email = $_POST['email'];
		$user_address = $_POST['address'];
        $user_mobile = $_POST['mobile'];
        $user_amount = $_POST['amount'];
        $user_id = $_POST['id'];
		
		$user_type = 0;

		$conn = mysqli_connect("localhost","root","","donation");
		if(!$conn) {
			die("<script>alert('Connection Failed.')</script>");
		}
		$sql = "INSERT INTO donation_table(name,email,address,mobile,amount,id) VALUES ('{$user_name}','{$user_email}','{$user_address}','{$user_mobile}','{$user_amount}','{$user_id}')";
		$result = mysqli_query($conn, $sql);
		header("Location: description.php");
		mysqli_close($conn);
	}
 ?>