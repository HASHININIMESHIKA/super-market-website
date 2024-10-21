<?php 
	 include 'components/connection.php';
	 session_start();

	 if (isset($_SESSION['user_id'])) {
	 	$user_id = $_SESSION['user_id'];
	 }else{
	 	$user_id = '';
	 }

	 //register user
	 if(isset($_POST['submit'])) {
	 	$email = $_POST['email'];
	 	$email = filter_var($email, FILTER_SANITIZE_STRING);
	 	$pass = $_POST['pass'];
	 	$pass = filter_var($pass, FILTER_SANITIZE_STRING);

	 	$select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
	 	$select_user->execute([$email, $pass]);
	 	$row = $select_user->fetch(PDO::FETCH_ASSOC);

	 	if ($select_user->rowCount() > 0) {
	 		$_SESSION['user_id'] = $row['id'];
	 		$_SESSION['user_name'] = $row['name'];
	 		$_SESSION['user_email'] = $row['email'];
	 		header('location: home.php');
	 	}else{
	 		$message[] = 'incorrect user name or password';
	 	}
	 }
?>
<style type="text/css">
    <?php include 'style.css';?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Super Market - login now</title>
</head>
<body>
	<div class="main-container">
		<section class="form-container">
			<div class="title">
				<img src="images/logo1.png">
				<hr>
				<h1>Login Now </h1>
				<hr>
				<p>Register now at Star Super Supermarket and unlock a world of benefits! By signing up, you gain access to exclusive discounts, personalized offers, and loyalty rewards. Experience a seamless shopping experience with faster checkouts, convenient digital receipts, and the ability to track your purchase history. Don't miss out on the opportunity to save more and make your shopping experience even better. Join our register now and start enjoying the perks today at Star Super Supermarket!</p>
			</div>
			<form action="" method="post">
				<div class="input-field">
					<p>Your mail: <span>*</span></p>
					<input type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<div class="input-field">
					<p>Your Password: <span>*</span></p>
					<input type="password" name="pass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<input type="submit" name="submit" value="login now" class="btn">
				<p> Do not have an account? <a href="register.php">register now</a></p>
			</form>
		</section>
	</div>
</body>
</html>>