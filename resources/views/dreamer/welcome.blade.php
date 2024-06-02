<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dreamer - Welcome</title>
		<link rel="stylesheet" href="{{ asset('css/welcome.css')}}" />
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<nav>
			<a class="about" href="/register">Register</a>
			<a class="login" href="/login">Login</a>
		</nav>
		<div class="welcome">
			<img src="{{ asset('img/logo.svg') }}" alt="logo" />
			<div class="text">
				<div id="title">
					<h1>Dreamer:</h1>
					<h1>Content Planner</h1>
				</div>
				<div class="description">
					<p>Creativity Meets Productivity</p>
					<p>Explore the Ease of Content Planning with Us</p>
					<br>
					<a id="desc-button" href="/register">Get Started</a>
				</div>
			</div>
		</div>
	</body>
</html>
