
<!DOCTYPE html>
<html lang="en">
<!-- Head  -->

<?php include 'templates/header.php';

if(isset($_SESSION['msg'])){
		echo '<script type="text/javascript">alert("' . $_SESSION['msg']. '")</script>';
		unset($_SESSION['msg']);
	}
	
	include_once 'dbCon.php';
	
	if(isset($_GET['pid'])){
		$tid = $_GET['pid'];
		
		$con = connect();
		$sql= "SELECT * from teacher WHERE `tid`='$tid'";
		$result=$con->query($sql);
				
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
						<li class="active"><a href="services.php"><span data-hover="Services">Services</span></a></li>					
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="showtr.php"><span data-hover="Show Teacher">Show Teacher</span></a></li>
						<li><a href="showuser.php"><span data-hover="Show Users">Show Users</span></a></li>
						<?php }elseif(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1){?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li class="active"><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>						
						<?php }elseif(isset($_SESSION['tid']) && $_SESSION['tid'] == True){?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li class="active"><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="profile.php"><span data-hover="Profile">Profile</span></a></li>
						<?php } else{ ?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
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
		<div class="wthree_banner1_info">
			<div class="container">
				<h3>Teacher <span>Appoint</span></h3>
			</div>
		</div>
	</div>
<!-- //banner -->


<!-- services1 -->
	<div class="courses">
		<div class="container"> 	
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_right">
					<h3>Make an appointment with <span>Teacher</span></h3>
					<p>We are sharing our platform to recruite touters for your child best education and progressive life</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<?php
			
			foreach($result as $row){
				$tid		= $row['tid'];
				$fname 		= $row['fname'];
				$lname 		= $row['lname'];
				$email 		= $row['email'];
				$mobile 	= $row['mobile'];		
				$gender 	= $row['gender'];
				$address 	= $row['address'];
				$dob		= $row['dob'];
				$subject	= $row['subject'];
				$prf		= $row['prf'];
				$ssc		= $row['ssc'];
				$hsc		= $row['hsc'];
				$mst		= $row['mst'];			
				}
			
			?>
			
			
			
			<div class="agileits_w3layouts_team_grids">				
				<div class="col-md-4 w3_agileits_services1_grid">
					<div class="row">
						<div class="service-img">
							<img src="<?=BASE_URL?>/images/uploads/prf/<?=$row['prf']?>" class="avatar img-rounded" style="height:300px; width:300px;" alt=""/>						
						</div>
					</div>
				</div>
				<div class="col-md-8 w3_agileits_services1_grid">
					<div class="row">
						<div class="col-lg-12 p-5" id="tregister">
							<form action="bookingchk.php" method="post" enctype="multipart/form-data">
								<div class="row pb-3">
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-group text-light"  for="">Teacher Name</label>
											<input class="form-control" name="tname" placeholder="Teacher Name" value="<?php if(isset($fname)) echo $fname; ?> <?php if(isset($lname)) echo $lname; ?>" type="text" required="">
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-group text-light"  for="">User Name</label>
											<input class="form-control" name="uname" placeholder="User Name" value="<?=$_SESSION['fname']?> <?=$_SESSION['lname']?>" type="text" required="">
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->
								</div><!-- /.row -->
								<div class="row pb-3">
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-group text-light"  for="">Date of Appointment*</label>
											<input class="form-control" name="doa" placeholder="Date of Appointment" class="textbox-n" value="" type="text" onfocus="(this.type='date')"  id="date">
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->
									<div class="col-lg-6">
										<div class="form-group">
											<label class="form-group text-light"  for="">Teacher Contact Number</label>
											<input class="form-control" name="mnum" placeholder="Mobile Number" value="<?php if(isset($mobile)) echo $mobile; ?>" type="text" required="">
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->
								</div><!-- /.row -->								
								<input type="hidden" name="buid" class="form-control" value="<?=$_SESSION['uid']?>">
								<input type="hidden" name="btid" class="form-control" value="<?=$row['tid']?>">	
								<input type="submit" value="Make An Appointment">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>									
			</div>
			<div class="clearfix"> </div>
			<div class="agileits_w3layouts_team_grids">				
				<div class="col-md-4 w3_agileits_services1_grid">
					<div class="row">
						<div class="service-img">
							<label class="form-group"  for="">SSC Certificate</label>
							<img src="<?=BASE_URL?>/images/uploads/ssc/<?=$row['ssc']?>" class="avatar img-rounded" style="height:300px; width:400px;" alt=""/>						
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services1_grid">
					<div class="row">
						<div class="service-img">
							<label class="form-group"  for="">HSC Certificate</label>
							<img src="<?=BASE_URL?>/images/uploads/hsc/<?=$row['hsc']?>" class="avatar img-rounded" style="height:300px; width:400px;" alt=""/>						
						</div>
					</div>
				</div>
				<div class="col-md-4 w3_agileits_services1_grid">
					<div class="row">
						<div class="service-img">
							<label class="form-group"  for="">Masters Certificate</label>
							<img src="<?=BASE_URL?>/images/uploads/mst/<?=$row['mst']?>" class="avatar img-rounded" style="height:300px; width:400px;" alt=""/>						
						</div>
					</div>
				</div>							
			</div>
		</div>
	</div>
	
	<div class="clearfix"> </div>
<!-- //services1 -->


<!-- footer -->

<?php include 'templates/footer.php'; ?>
<!-- //footer -->
</body>
</html>