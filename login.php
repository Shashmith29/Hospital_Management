<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die;
				}
			}
		}

		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<?php echo '<link href="style1.css" rel="stylesheet">'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			background-image: url('images/bg8.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			height: 80vh;
			opacity: 0.80;
		}
	</style>
</head>

<body>



	<div id="box">

		<form method="post">
			<div>
				<h1>Login</h1>
			</div>

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

			<div class="box">
				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
			</div>
			<br>
			<h4>Still Not Registered? <a href="signup.php">Sign Up Here</a>
			</h4>
		</form>
	</div>
</body>

</html>