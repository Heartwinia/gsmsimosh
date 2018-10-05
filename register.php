<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include"link.php"; ?>

	<title>Register</title>
</head>
<body>
	
<?php include"header.php"; ?>


<div class="divider"></div>


<div class="main-section">
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-5">
		
		<div class="register main-form">
			<h2 class="form-header">Register now</h2>
			<form>
				<div class="form-group">
				    <label for="">Nickname</label>
				    <input type="" class="form-control" id="" aria-describedby="emailHelp" placeholder="nickname">
				    <small id="" class="form-text text-danger">Here goes the error</small>
				 </div>

				 <div class="form-group">
				    <label for="">Email Address</label>
				    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="email address">
				    <small id="" class="form-text text-danger">Here goes the error</small>
				 </div>

				 <div class="form-group">
				    <label for="">Username</label>
				    <input type="" class="form-control" id="" aria-describedby="emailHelp" placeholder="username">
				    <small id="" class="form-text text-danger">Here goes the error</small>
				 </div>

				 <div class="form-group">
				    <label for="">Password</label>
				    <input type="Password" class="form-control mgb4" id="" aria-describedby="emailHelp" placeholder="password">
				    <input type="Password" class="form-control" id="" aria-describedby="emailHelp" placeholder="retype password">
				    <small id="" class="form-text text-danger">Here goes the error</small>
				 </div>

				 <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">I agree to the <a href="">Terms and Conditions</a>.</label>
				  </div>

				 <a href="registertwo.php" class="btn main-btn">Sign Up</a>

				 <p class="form-footer-info">Already a member? <a href="login.php">Login to your account</a></p>
			</form>
		</div>

	</div>
</div>
</div>
</div>


<div class="divider"></div>


<?php include"footer.php"; ?>

</body>
</html>