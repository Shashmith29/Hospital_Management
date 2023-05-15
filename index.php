<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
	<title>My website</title>
	<?php echo '<link href="style2.css" rel="stylesheet">'; ?>
	<link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<header class="header">
		<img src="images/Green & Blue Medical Center Logo.png" id="logo" alt="">


		<nav class="navbar">
			<a href="index.php">home</a>
			<a href="about.php">about us</a>
			<a href="services.php">services</a>
			<a href="gallery.php">gallery</a>
			<a href="contact.php">contact us</a>

		</nav>


	</header>
	<div class="mainpage">
		<a href="appointment.php"><img src="images/main.png" style="width:100%"></a>
	</div>

	<!-- Slideshow container -->
	<div class="banner1">
		<img src="images/banner1.png">
	</div>
	<div class="banner2">
		<img src="images/banner2.png">
	</div>

	<div class="slider-frame">

		<div class="slide-images">
			<div class="img-container">
				<a href="appointment.php"><img src="images/slide1.png"></a>
			</div>
			<div class="img-container">
				<img src="images/slide2.png">
			</div>
			<div class="img-container">
				<img src="images/slide3.png">
			</div>
		</div>
	</div>
	<div class="about">
		<div class="main-about">
			<div class="inner-about">
				<div class="about-content">
					<h1>about us</h1>
					<p>The Company Itself Is A Very Successful Company. What Are The Consequences Of These Blissful
						Finding Of Pleasure, Never Fleeing From Pleasures, Longing To Endure The Times, Gaining Guilt,
						Hatred, Trouble, Pain, Flattery, Which You Come To!</p>
					<a href="about.php">Read more</a>
				</div>

			</div>
			<div class="inner-about">
				<div class="inner-about-image">
					<img src="images/chiness.jpg" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="our-services">
		<div class="service-content">
			<div class="left-service-content">
				<h1>Our special services</h1>
				<p>The Customer Himself, The Customer Will Be Able To Pursue The Adipiscing Of The Company. If The Mind
					Of The Truth And The Like Are Discerned, Does It Hinder Flattery, Therefore, To Result In A More
					Laborious Work Itself?</p>
			</div>

			<div class="right-service-content">
				<div class="right-btn">
					<a href="services.php">See all services</a>
				</div>
			</div>
		</div>

		<div class="main-services">
			<div class="inner-services-content">

				<h2>Profressional Dental Clinic</h2>
				<p>We have an authoritative, independent and recognised voice of dental
					professionals in our hospital. It is committed to public oral health, ethics, science and
					advancement of
					dental professionals through its initiatives in advocacy, education, research and development of
					standards.</p>

			</div>

			<div class="inner-services-content">

				<h2>Gynecology Clinic</h2>
				<p>Our gynecology experts provide preventive services, accurate diagnosis and outpatient
					treatments for common and complex disorders of the female reproductive system. Your care hospital
					team
					include doctors, surgeons, genetics professionals, physician assistants and advanced practice
					nurses.</p>

			</div>

			<div class="inner-services-content">

				<h2>Medical Examination</h2>
				<p>A medical examination, also known as a physical examination, refers to a standard health procedure to
					assess vital signs including blood pressure, body temperature, pulse rate, and respiration. However,
					other physiological variables such as fitness levels, physical capacity and stamina, and
					psychological soundness fall into the categorical umbrella of medical examination parameters.</p>

			</div>
		</div>



</body>

</html>