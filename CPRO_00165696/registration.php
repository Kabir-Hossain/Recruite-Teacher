<!DOCTYPE html>
<html lang="en">
<!-- Head  -->

<?php include 'templates/header.php';

if(isset($_SESSION['msg'])){
		echo '<script type="text/javascript">alert("' . $_SESSION['msg']. '")</script>';
		unset($_SESSION['msg']);
	}

?>

<body>
<!-- banner -->
	<div class="banner1">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.php"><span>Recruite</span>Tutor</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="login.php"><span data-hover="Login">LogIn</span></a></li>
						<li class="active"><a href="registeration.php"><span data-hover="Registeration">Registeration</span></a></li>
					</ul>
				</nav>
			</div>
			
		</nav>
		<div class="wthree_banner1_info">
			<div class="container">
				<h3><span>User </span>Registeration Form</h3>
			</div>
		</div>
		
	</div>
<!-- //banner -->
	
<!-- register -->


	<div class="w3_agile_team_grid">
		<div class="w3_agile_team_grid_left">
			<p></p>
			
		</div>
		<div class="w3_agile_team_grid_right">
			
			
		</div>
		<div class="clearfix"> </div>
	</div>




	<div>
		<div class="container">
			<div class="col-lg-12 p-5" id="tregister">
				<form action="regichk.php" method="post">
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="fname" placeholder="First Name" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="lname" placeholder="Last Name" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="email" placeholder="Email" type="email" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="mnum" placeholder="Mobile Number" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="gender" placeholder="Gender" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="address" placeholder="Address" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="password" placeholder="Password" type="password" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->					
					<input type="submit" value="Registeration">
					
				
				</form>
			</div>
				
			<div class="clearfix"> </div>
		</div>
	</div>
	
	
	<div class="w3_agile_team_grid">
		<div class="w3_agile_team_grid_left">
			
			
		</div>
		<div class="w3_agile_team_grid_right">
			
			
		</div>
		<div class="clearfix"> </div>
	</div>

	
	
	
<!-- //register -->

<!-- footer -->

<?php include 'templates/footer.php'; ?>
<!-- //footer -->
</body>
</html>