<?php
	include '../config/connect.php';
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$chk_login=$con->query("SELECT * FROM user WHERE username='$username' and password='$password'");
		$user=mysqli_fetch_array($chk_login);
		$num_rows=mysqli_num_rows($chk_login);
		if($num_rows==0){
			echo "<script>alert('Invalid Username or Password')</script>";
		}else{	
			session_start();					
			$_SESSION['username']=$user['username'];
			$_SESSION['name']=$user['name'];			
			header('location:index.php');
		}
	}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>TATC-SHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../login/css/style.css">
	<link rel="shortcut icon" href="tatclogo.png" type="image/x-icon">
	<style>
		input{
			font-style: italic;
		}
	</style>

	</head>
	<body style="background:#dfecf5">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
				<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
		      		<div class="form-group">
		      			<input type="text" class="form-control text-center" placeholder="Username" required name="username">
		      		</div>	            
					<div class="form-group">
		      			<input type="password" class="form-control text-center" placeholder="Password" required name="password">
		      		</div>	            
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="submit">Submit</button>
	            </div>	            
	          </form>
	        </div>
				</div>
			</div>
		</div>
		<br>		
	</section>	



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

