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
	 	$id = unique_id();
	 	$name = $_POST['name'];
	 	$name = filter_var($name, FILTER_SANITIZE_STRING);
	 	$email = $_POST['email'];
	 	$email = filter_var($email, FILTER_SANITIZE_STRING);
	 	$pass = $_POST['pass'];
	 	$pass = filter_var($pass, FILTER_SANITIZE_STRING);
	 	$cpass = $_POST['cpass'];
	 	$cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

	 	$select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
	 	$select_user->execute([$email]);
	 	$row = $select_user->fetch(PDO::FETCH_ASSOC);

	 	if ($select_user->rowCount() > 0){
	 		$message[] = 'email already exist';
	 		echo 'email already exist';
	 	}else{
	 		if($pass != $cpass){
	 			$message[] = 'confirm your password';
	 			echo 'confirm your password';
	 		}else{
	 			$insert_user = $conn->prepare("INSERT INTO `users`(id,name,email,password) VALUES(?,?,?,?)");
	 			$insert_user->execute([$id,$name,$email,$pass]);
	 			header('location: home.php');
	 			$select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
	 			$select_user->execute([$email, $pass]);
	 			$row = $select_user->fetch(PDO::FETCH_ASSOC);
	 			if ($select_user->rowCount() > 0) {
	 				$_SESSION['user_id'] = $row['id'];
	 				$_SESSION['user_name'] = $row['name'];
	 				$_SESSION['user_email'] = $row['email'];
	 			}
	 		}
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
	<title>Super Market - register now</title>
</head>
<body>
	<div class="main-container">
		<section class="form-container">
			<div class="title">
				<img src="images/logo1.png">
				<hr>
				<h1>Rgister Now </h1>
				<hr>
				<p>Register now at Star Super Supermarket and unlock a world of benefits! By signing up, you gain access to exclusive discounts, personalized offers, and loyalty rewards. Experience a seamless shopping experience with faster checkouts, convenient digital receipts, and the ability to track your purchase history. Don't miss out on the opportunity to save more and make your shopping experience even better. Join our register now and start enjoying the perks today at Star Super Supermarket!</p>
			</div>
			<form action="" method="post">
				<div class="input-field">
					<p>Your Full name: <span>*</span></p>
					<input type="text" name="name" required placeholder="enter your name" maxlength="50">
				</div>
				<div class="input-field">
					<p>Your mail: <span>*</span></p>
					<input type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<div class="input-field">
					<p>Your Password:  <span>*</span></p>
					<input type="password" name="pass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<div class="input-field">
					<p>Confirm Your Password: <span>*</span></p>
					<input type="password" name="cpass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<input type="submit" name="submit" value="register now" class="btn">
				<p> already have an account? <a href="login.php">login now</a></p>
			</form>
		</section>
	</div>
</body>
</html>>