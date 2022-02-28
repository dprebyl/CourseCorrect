<?php http_response_code(500); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CourseCorrect</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="libs/bootstrap.min.css">
	<script src="libs/jquery.slim.min.js"></script>
	<script src="libs/popper.min.js"></script>
	<script src="libs/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="https://ku.edu">
			<img src="images/KUSig_Horz_Web_Blue.png" height="30" alt="">
		</a>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="https://eecs.ku.edu">Electrical Engineering and Computer Science</a>
			</li>
		</ul>
	</nav>
    <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<img src="images/logo.png" class="m-4 border">
				</div>
				<div class="text-center">
					<h1>Whoops!</h1>
				</div>
				<div class="text-center my-3">
					<p>
						Something went wrong. Error code: 
						<script>
							// Only allow numbers in error code to prevent XSS attacks
							document.write(new URLSearchParams(window.location.search).get("code").replace(/[^0-9]/g, ""));
						</script>
					</p>
				</div>
				<div class="text-center">
					<a href=".">
						<input type="button" class="btn btn-primary" value="Return to login page">
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>