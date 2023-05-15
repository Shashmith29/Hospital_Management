<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
	<?php echo '<link href="style.css" rel="stylesheet">'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			background-image: url('images/signupbg.jpeg');
			background-repeat: no-repeat;
			background-size: cover;
			height: 100vh;
			opacity: 0.75;
		}
	</style>
</head>

<body>



	<div id="box">

		<form method="post">
			<div>
				<h1>Signup</h1>
			</div>
			<!--First name-->
			<div class="box">
				<label for="firstName" class="fl fontLabel">
					<h5> First Name: </h5>
				</label>
				<div class="new iconBox">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<div class="fr">
					<input type="text" name="fname" placeholder="First Name" class="textBox" autofocus="on" required>
				</div>
				<div class="clr"></div>
			</div>
			<!--First name-->
			<div class="box">
				<label for="user_name" class="fl fontLabel">
					<h5>User Name:</h5>
				</label>
				<div class="new iconBox">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<div class="fr">
					<input type="text" name="user_name" placeholder="User Name" class="textBox" autofocus="on" required>
				</div>
				<div class="clr"></div>
			</div>
			<!---Phone No.------>
			<div class="box">
				<label for="phone" class="fl fontLabel">
					<h5> Phone No.: </h5>
				</label>
				<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
				<div class="fr">
					<input type="text" required name="phone_no" maxlength="10" placeholder="Phone No." class="textBox">
				</div>
				<div class="clr"></div>
			</div>
			<!---Phone No.---->
			<!---Email ID---->
			<div class="box">
				<label for="email" class="fl fontLabel">
					<h5>Email ID:</h5>
				</label>
				<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
				<div class="fr">
					<input type="email" required name="email" placeholder="Email Id" class="textBox">
				</div>
				<div class="clr"></div>
			</div>
			<!--Email ID----->

			<div class="box">
				<label for="password" class="fl fontLabel">
					<h5>Password:</h5>
				</label>
				<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
				<div class="fr">
					<input type="Password" required name="password" placeholder="Password" class="textBox">
				</div>
				<div class="clr"></div>

			</div>
			<!---Gender----->
			<div class="box radio">
				<label for="gender" class="fl fontLabel">
					<h5>Gender:</h5>
				</label>
				<input type="radio" name="gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
				<input type="radio" name="gender" value="Female" required> Female
			</div>
			<!---Gender--->
			<!--Terms and Conditions------>
			<div class="box terms">
				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
			</div>
			<!--Terms and Conditions------>
			<div class="box">
				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
			</div>
			<br>
			<h4>Already Registered? <a href="login.php">Login Here</a>
			</h4>


		</form>
	</div>
</body>

</html>