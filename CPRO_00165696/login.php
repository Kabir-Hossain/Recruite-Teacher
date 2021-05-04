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
						<?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 0){?>					
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>					
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="showtr.php"><span data-hover="Show Teacher">Show Teacher</span></a></li>
						<li><a href="showuser.php"><span data-hover="Show Users">Show Users</span></a></li>
						<?php }elseif(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1){?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>						
						<?php }elseif(isset($_SESSION['tid']) && $_SESSION['tid'] == True){?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="profile.php"><span data-hover="Profile">Profile</span></a></li>
						<?php } else{ ?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li class="active"><a href="login.php"><span data-hover="Login">LogIn</span></a></li>
						<?php
						}?>
					</ul>
				</nav>
			</div>			
		</nav>
		
	</div>
	
	<!-- banner -->
	
	
	
	<div class="w3_agile_team_grid">
		<div class="w3_agile_team_grid_left">
			<p></p>
			
		</div>
		<div class="w3_agile_team_grid_right">
			
			
		</div>
		<div class="clearfix"> </div>
	</div>
	
	<!-- register -->
	<div>
		<div class="container">
			<div class="col-md-6 w3layouts_register_right">
				<form action="logincheck.php" method="post">					
					<input class="form-control" name="email" placeholder="Email" type="email" required="">
					<input class="form-control" name="password" placeholder="Password" type="password" required="">					
					<input type="submit" value="LogIn">					
				</form>
			</div>
			<div class="col-md-6 w3layouts_register_left">
				<h3><span>LogIn Now</span> now</h3>
				<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida. 
					Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
	
	<div class="w3_agile_team_grid">
		<div class="w3_agile_team_grid_left">
			<p></p>
			
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