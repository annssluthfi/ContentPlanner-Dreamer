<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dreamer - Login</title>
		<link rel="stylesheet" href="{{ asset('css/login.css')}}" />
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
			@if(session()->has('success'))
  				<div class="alert" role="alert">
        	
    		</div>
  			@endif

			@if(session()->has('loginError'))
    			<div class="alert" role="alert">
        
    			</div>
			@endif

			<div class="form">
				<h1>Login to Your Account</h1>
				<br />
				<form action="/login" method="post">
                    @csrf
					<label for="email">Email</label>
					<input
						type="text"
						name="email"
						id="email"
						placeholder="Email"
                        required
                        value = "{{ old('email')}}"
						autocomplete="off"
					/>
					
					<label for="password">Password</label>
					<input
						type="password"
						name="password"
						id="password"
						placeholder="Password"
                        required
					/>
					<br />
					<button class="button" type="submit">login</button>
				</form>
				<br />
				<p>Need an Account? <a href="/register">Register Here</a></p>
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
