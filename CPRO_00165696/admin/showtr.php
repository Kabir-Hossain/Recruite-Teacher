<!DOCTYPE html>
<html lang="en">
<!-- Head  -->

<?php include '../templates/header.php';

if(isset($_SESSION['msg'])){
		echo '<script type="text/javascript">alert("' . $_SESSION['msg']. '")</script>';
		unset($_SESSION['msg']);
	}
	
	
	include_once '../dbCon.php';
		$con = connect();
		$sql= "SELECT * from doctors WHERE `checked`= 0";
		$result=$con->query($sql);

	if(isset($_GET['aid'])){
		$id = $_GET['aid'];		
		
		$con= connect();
		$sql= "UPDATE `doctors` SET `checked`= 1 WHERE `id`= '$id'";
		$resultData=$con->query($sql);
		$msg1 ='Doctor information has been Approved.\n';
		$message=$msg1;
			$_SESSION['msg'] = $message;
			header('location:showdr.php');
		
		}
	
	if(isset($_GET['uid'])){
		$uid = $_GET['uid'];		
		
		$con= connect();
		$sql= "UPDATE `doctors` SET `checked`= 0 WHERE `id`= '$uid'";
		$resultData=$con->query($sql);
		$msg1 ='Doctor information has been Unapproved.\n';
		$message=$msg1;
			$_SESSION['msg'] = $message;
			header('location:showdr.php');
		
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
						<li><a href="courses.php"><span data-hover="Courses">Courses</span></a></li>
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li class="active"><a href="showtr.php"><span data-hover="Show Teachers">Show Teachers</span></a></li>
					</ul>
				</nav>
			</div>
			
		</nav>
		
		<div class="wthree_banner1_info">
			<div class="container">
				<h3><span>Showing  </span>Teachers List</h3>
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
		           
	</div>
	
	
	
	<!--End Profile -->
	
	
	
	
	




	<div>
		<div class="container">
			<div class="col-lg-12 p-5" id="tregister">
				<form action="tregichk.php" method="post" enctype="multipart/form-data">
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
					<input type="submit" value="Update">
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

<?php include '../templates/footer.php'; ?>
<!-- //footer -->
</body>
</html>