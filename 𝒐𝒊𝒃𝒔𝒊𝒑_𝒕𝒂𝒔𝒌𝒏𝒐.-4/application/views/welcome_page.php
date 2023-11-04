<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link
		href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,700&family=Poppins:wght@600&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="<?= base_url() ?>assets/CSS/style.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<title>snapWrite | Welcome</title>
</head>

<body>

	<!-- Index Page -->
	<div class="container">

		<!-- Navigatoin -->
		<div class="nav">
			<h2>Snap<span>Write</span></h2>

			<ul class="nav__items">
				<li class="nav__item"><a href="#section1">Features</a></li>
				<li class="nav__item"><a href="#section2">Operations</a></li>
				<li class="nav__item"><a href="#section3">Testimonials</a></li>
				<li class="nav__item buttons in">Sign In</li>
				<li class="nav__item buttons up">Sign Up</li>
			</ul>
		</div>

		<!-- Main-Page -->
		<div class="main-page">

			<div class="left-page">
				<h3>Welcome, fellows</h3>
				<h1>Snap <span>Write</span></h1>

				<p>Will Provide you the professional way
					to keep remind you your works and arrange them in a beautifull way.
				</p>

				<button class="started"><a href="#">Learn more &DownArrow;</a></button>
			</div>

			<div class="right-page">
				<img src="<?= base_url(); ?>assets/img/bg-shape.png" alt="img" class="shape">
				<img src="<?= base_url(); ?>assets/img/girl.png" alt="img" class="girl">
			</div>
		</div>


		<!-- SignIn-Modal -->
		<?php include 'signIn_page.php'; ?>

		<!-- SignUp Modal -->
		<?php
		if (isset($validation)) {
			?>
			<input type="hidden" id="validationFailed" value="<?php echo $validation ? "true" : "false" ?>">
			<?php
		}
		?>


		<?php include 'signUp_page.php'; ?>

		<div class="overlay hidden "></div>
		<script src="<?= base_url(); ?>assets/js/script.js"></script>

		<script src="sweetalert2.all.min.js"></script>
		<?php if ($error = $this->session->flashdata('LoginFailed')) {
			$message = $this->session->flashdata('LoginFailed');
			?>
			<script>
				Swal.fire({
					title: 'Error!',
					text: '<?= $message ?>',
					icon: 'error'
				})
			</script>
		<?php } ?>

		<?php if ($error = $this->session->flashdata('success')) {
			$message = $this->session->flashdata('success');
			?>
			<script>
				Swal.fire({
					title: 'Success',
					text: '<?= $message ?>',
					icon: 'success'
				})
			</script>
		<?php } ?>

</body>

</html>