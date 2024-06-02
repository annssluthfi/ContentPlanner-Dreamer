<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dreamer - Register</title>
		<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
		<div class="body1">
			<div class="form">
				<h1>Register Your Account</h1>
				<br />
				<form action="{{ route('store') }}" method="post">
                @csrf
					<label for="username">Username</label>
					<input type="text" name="username" id="username" placeholder="abcd_01"
                        required value="{{ old('username') }}" autocomplete="off"/>
					
					<label for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="user@email.com"
                        required value="{{ old('email')}}" autocomplete="off"/>
					
					<label for="password">Password</label>
					<input type="password" name="password" id="password"
						placeholder="Password" required/>
					<br />
					<button class="button" type="submit">Create Account</button>
				</form>
				<br />
				<p>Have an Account? <a href="/login">Login Here</a></p>
			</div>
		</div>
		<div class="body2">
			<img src="{{ asset('img/logo.svg') }}" alt="" />
			<div class="text">
				<div id="title">
					<h1>Dreamer:</h1>
					<h1>Content Planner</h1>
				</div>
				<div class="description">
					<p>Creativity Meets Productivity</p>
					<p>Explore the Ease of Content Planning with Us</p>
				</div>
			</div>
		</div>
	</body>
</html>
