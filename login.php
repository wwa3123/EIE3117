<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap Icon CSS-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	</head>
  
	<?php
		session_start();
		include_once('config.php');

		if(isset($_COOKIE["user_login"])) {
			header('location: auth.php');
		}

	?>




	<body>

		<section class="vh-100">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-black">

						<div class="px-5 ms-xl-4">
							<i class="bi bi-book" style="color: #709085;"></i>
							<span class="h1 fw-bold mb-0">Logo</span>
						</div>

						<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

							<form style="width: 23rem;" action="auth.php" method="post" id="login">

								<h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

								<div class="form-floating mb-4">
									<input type="text" id="username" name="username" class="form-control form-control-lg" >
									<label class="form-label" for="email">Username</label>
								</div>

								<div class="form-floating mb-4">
									<input type="password" id="password" name="password" class="form-control form-control-lg">
									<label class="form-label" for="password">Password</label>
								</div>

								<div class="form-check mb-4">
									<input type="checkbox" id="remember" name="remember" class="form-check-input" value="remember">
									<label class="form-check-label" for="remember">remember me</label>
								</div>


								<div class="pt-1 mb-4">
									<button id="submit" name="login" class="btn btn-info btn-lg btn-block" type="submit">Login</button>
								</div>
								

								<p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
								<p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

							</form>

						</div>

					</div>
					
					<div class="col-sm-6 px-0 d-none d-sm-block">
						<img src=""
						alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
					</div>
				</div>
			</div>
		</section>
  </body>
</html>
