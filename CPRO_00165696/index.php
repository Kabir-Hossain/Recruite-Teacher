
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
	<div class="banner">
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
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
					
						<?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 0){?>					
						<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>					
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="showtr.php"><span data-hover="Show Teacher">Show Teacher</span></a></li>
						<li><a href="showuser.php"><span data-hover="Show Users">Show Users</span></a></li>
						<?php }elseif(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1){?>
						<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>						
						<?php }elseif(isset($_SESSION['tid']) && $_SESSION['tid'] == True){?>
						<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="profile.php"><span data-hover="Profile">Profile</span></a></li>
						<?php } else{ ?>
						<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						
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
		<div class="container">
			<div class="agile_banner_info">
				<div class="agile_banner_info1">
					
					<div id="typed-strings" class="agileits_w3layouts_strings">
						<p>better <i>education</i> for better world</p>
						<p><i>education</i> is a journey not a race</p>
						<p>character is a wish for a perfect <i>education</i></p>
					</div>
					<span id="typed" style="white-space:pre;"></span>
				</div>
			</div>
			
			<div class="w3_agile_social_icons">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="w3_banner_color">
				<span></span>
			</div>
			<div class="w3_scroll_arrow">
			  <a href="#team" class="scroll scroll-down"><span class="dot"> </span></a>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- banner-bottom -->	
	
<!-- //banner-bottom -->	
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
<!-- register -->
	
<!-- //register -->
<!-- team -->
	<div class="team w3_women_team" id="team">
		<div class="container">	
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>01</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>meet our <span>Recruite</span> team</h3>
					<p>We are sharing our platform to recruite touters for your child best education and progressive life.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids">
				<div class="col-md-4 agileits_w3layouts_team_grid">
					<h3>Jane Smith</h3>
					<p>Manager</p>
					<ul class="agileinfo_social_icons w3_agileits_social_icons">
						<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					</ul>
					<img src="images/5.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-4 agileits_w3layouts_team_grid">
					<h3>Belinda Paul</h3>
					<p>Creative Head</p>
					<ul class="agileinfo_social_icons w3_agileits_social_icons">
						<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					</ul>
					<img src="images/6.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-4 agileits_w3layouts_team_grid">
					<h3>Laura Doe</h3>
					<p>Head of the department</p>
					<ul class="agileinfo_social_icons w3_agileits_social_icons">
						<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					</ul>
					<img src="images/7.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- gallery-top -->
	<div class="gallery-top">
		<div class="agileinfo_gallery_top">
			<h3><span>Education</span> is the most powerful weapon which you can use to change 
				the world</h3>
		</div>
	</div>
<!-- //gallery-top -->
<!-- gallery -->
	<div class="gallery">
		<ul id="flexiselDemo1">	
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/8.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/8.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/9.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/9.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/10.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/10.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/11.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/11.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/12.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/12.jpg" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>	
					</a>
				</div>
			</li>
		</ul>
	</div>
<!-- //gallery -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>05</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>What Our <span>Students</span> Says</h3>
					<p>It is well said that teachers are great than the parents.
					 Parents give birth to a child whereas teachers shape his/her character and make future bright</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_testimonials_grids">
				 <section class="center slider">
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Rosy Crisp</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/1.png" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Laura Paul</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/2.png" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Michael Doe</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/3.png" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- footer -->

<?php include 'templates/footer.php'; ?>
<!-- //footer -->

</body>
</html>