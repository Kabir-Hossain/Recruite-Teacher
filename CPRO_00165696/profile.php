<!DOCTYPE html>
<html lang="en">
<!-- Head  -->

<?php include 'templates/header.php';

if(isset($_SESSION['msg'])){
		echo '<script type="text/javascript">alert("' . $_SESSION['msg']. '")</script>';
		unset($_SESSION['msg']);
	}
	
	
	
	include_once "dbCon.php";
	
		$tid = $_SESSION['tid'];
		$sql = "SELECT * FROM teacher WHERE `tid`='$tid'";
		$conn = connect();		
		$result = $conn->query($sql);


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
						<li class="active"><a href="profile.php"><span data-hover="Profile">Profile</span></a></li>
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
					<?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true){?>
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
				<h3><span>Your  </span>Profile</h3>
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
	
	<!-- Profile -->
	
	<?php
	foreach($result as $row){
	$fname 		= $row['fname'];
	$lname 		= $row['lname'];
	$email 		= $row['email'];
	$mobile 	= $row['mobile'];		
	$gender 	= $row['gender'];
	$address 	= $row['address'];
	$dob		= $row['dob'];
	$subject	= $row['subject'];
	$prf		= $row['prf'];
	
	}	
	?>
	
	
	<div class="container emp-profile">
		<div class="row">
			<div class="col-md-4">
				<div class="profile-img">
					<img src="<?=BASE_URL?>/images/uploads/prf/<?=$row['prf']?>" class="avatar img-rounded" alt=""/>						
				</div>
				<div class="row" id="pup">
					<form action="picupdate.php" method="post" enctype="multipart/form-data">						
						<div class="form-group">
							<input type="file" name="uprf"  class="form-control">
						</div>						
						<input class="form-group" name="picup" type="submit" value="Change">
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<table class="table">
				  <thead>
					<tr>						 
					  <th scope="col"><h2><?=$row['fname']?> <?=$row['lname']?></h2></th>
					  <th scope="col"></th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>First Name</td>
					  <td><?=$row['fname']?></td>
					</tr>
					<tr>
					  <td>Last Name</td>
					  <td><?=$row['lname']?></td>
					</tr>
					<tr>
					  <td>Email</td>
					  <td><?=$row['email']?></td>
					</tr>
					<tr>
					  <td>Mobile Number</td>
					  <td><?=$row['mobile']?></td>
					</tr>
					<tr>
					  <td>Gender</td>
					  <td><?=$row['gender']?></td>
					</tr>
					<tr>
					  <td>Address</td>
					  <td><?=$row['address']?></td>
					</tr>
					<tr>
					  <td>Date of Birth</td>
					  <td><?=$row['dob']?></td>
					</tr>
					<tr>
					  <td>Major Subjects</td>
					  <td><?=$row['subject']?></td>
					</tr>
				  </tbody>
				</table>
			</div>
		</div>	
	</div>
	
	
	
	<!--End Profile -->
	
	
	
	
	




	<div>
		<div class="container">
			<div class="col-lg-12 p-5" id="tregister">
				<form action="proupdate.php" method="post" enctype="multipart/form-data">
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="fname" placeholder="First Name" value="<?php if(isset($fname)) echo $fname; ?>" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="lname" placeholder="Last Name" value="<?php if(isset($lname)) echo $lname; ?>" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="mnum" placeholder="Mobile Number" value="<?php if(isset($mobile)) echo $mobile; ?>" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="gender" placeholder="Gender" value="<?php if(isset($gender)) echo $gender; ?>" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="address" placeholder="Address" value="<?php if(isset($address)) echo $address; ?>" type="text" required="">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
					<div class="row pb-3">
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="dob" placeholder="Date of Birth" class="textbox-n" value="<?php if(isset($dob)) echo $dob; ?>" type="text" onfocus="(this.type='date')"  id="date">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="form-group">								
								<input class="form-control" name="subjects" placeholder="Interested Subjects" value="<?php if(isset($subject)) echo $subject; ?>" type="text" required="">
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
					<input type="submit" name="update" value="Update">
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