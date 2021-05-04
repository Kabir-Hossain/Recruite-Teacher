
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
						<li class="active"><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>						
						<?php }elseif(isset($_SESSION['tid']) && $_SESSION['tid'] == True){?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li class="active"><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="profile.php"><span data-hover="Profile">Profile</span></a></li>
						<?php } else{ ?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li class="active"><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						
						<?php
						}?>
					</ul>
				</nav>
			</div>
			
			<div class="w3_agile_phone">
				<ul class="nav navbar-nav">
					<?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == True){?>
					<li><a href="logout.php"><?=$_SESSION['lname']?>-log Out</a></li>
					<?php }else{?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">SIGNup/LOGin</span> <b class="caret"></b></a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li><a href="tregistration.php">SignUp AS Teacher</a></li>
							<li><a href="registration.php">SignUp AS User</a></li>
							<li><a href="login.php" >log In</a></li>
						</ul>
					</li>
					<?php
					 }?>		
				</ul>
			</div>
			
			
		</nav>
		<div class="wthree_banner1_info">
			<div class="container">
				<h3><span>About</span> Us</h3>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- courses -->
	<div class="courses">
		<div class="container"> 
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>01</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>We <span>Offered</span></h3>
					<p>We are sharing our platform to recruite touters for your child best education and progressive life</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids w3ls_courses_grids">
				<div class="col-md-6 w3ls_banner_bottom_left w3ls_courses_left">
					<div class="w3ls_courses_left_grids">
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>PHYSICS</h3>
							<p>Well-trained teachers are essential for quality education. However,
							 Students who have not received the required. We are providing you the Best</p>
						</div>
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>CHEMISTRY</h3>
							<p>Well-trained teachers are essential for quality education. However,
							 Students who have not received the required. We are providing you the Best</p>
						</div>
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>BIOLOGY</h3>
							<p>Well-trained teachers are essential for quality education. However,
							 Students who have not received the required. We are providing you the Best</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 agileits_courses_right">
					<img src="images/2.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //courses -->
<!-- stats -->
	
<!-- //stats -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- stats-bottom-banner -->
	<div class="stats-bottom-banner">
		<div class="container">
			<h3>the whole purpose of <span>education</span> is to turn mirrors into windows</h3>
			<p>Well-trained teachers are essential for quality education. However,
							 Students who have not received the required. We are providing you the Best</p>
			<div class="w3l_more">
				<a href="#" class="button button--nina agileits_button" data-text="Learn more" data-toggle="modal" data-target="#myModal">
					<span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
				</a>
			</div>
		</div>
	</div>
<!-- //stats-bottom-banner -->	
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Edifying
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/10.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- stats-bottom -->
	<div class="team">
		<div class="container"> 
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>03</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>Our <span>Skills</span></h3>
					<p>Well-trained teachers are essential for quality education. However,
							 Students who have not received the required. We are providing you the Best.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids">
				<div class="col-md-6 w3l_stats_bottom_grid_left">
					<img src="images/5.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3l_stats_bottom_grid_right">
					<div class='bar_group'>
						<div class='bar_group__bar thin elastic' label='PHYSICS' value='230'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>65%</p>
							</div>
						</div>
						<div class='bar_group__bar thin elastic' label='CHEMISTRY' value='130'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>35%</p>
							</div>
						</div>
						<div class='bar_group__bar thin elastic' label='BIOLOGY' value='160'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>45%</p>
							</div>
						</div>
						<div class='bar_group__bar thin elastic' label='HIGER-MATH' value='340'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>100%</p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //stats-bottom -->	
<script src="js/bars.js"></script>
<!-- footer -->

<?php include 'templates/footer.php'; ?>
<!-- //footer -->

</body>
</html>