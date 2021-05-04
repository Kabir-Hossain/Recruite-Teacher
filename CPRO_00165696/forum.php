
<!DOCTYPE html>
<html lang="en">
<!-- Head  -->

<?php include 'templates/header.php';

	
if(isset($_SESSION['msg'])){
		echo '<script type="text/javascript">alert("' . $_SESSION['msg']. '")</script>';
		unset($_SESSION['msg']);
	}
		
	include_once 'dbCon.php';
	$conn = connect();
	
	if(isset($_POST['qsubmit'])){
		$ptitle		= $_REQUEST['ptitle'];
		$post		= $_REQUEST['fpost'];
		$fuid		= $_SESSION['uid'];
		
		$sql = "INSERT INTO `fpost`(`ptitle`, `post`,`uid`) VALUES ('$ptitle','$post','$fuid')";
		$result = $conn->query($sql);
		$msg1 ='Your Post is submited sucessfully.\n';
	
	$message=$msg1;
	$_SESSION['msg'] = $message;
	header('location:forum.php');
	}	
	
	if(isset($_POST['csubmit'])){
		$pid		= $_REQUEST['pid'];
		$comment	= $_REQUEST['comment'];
		$cuid		= $_SESSION['uid'];
		
		$sql = "INSERT INTO `fcomment`(`pid`, `uid`, `comment`) VALUES ('$pid','$cuid','$comment')";
		$result = $conn->query($sql);
		$msg1 ='Your Comment is submited sucessfully.\n';
	
	$message=$msg1;
	$_SESSION['msg'] = $message;
	header('location:forum.php');
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
						<li class="active"><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
						<li><a href="showtr.php"><span data-hover="Show Teacher">Show Teacher</span></a></li>
						<li><a href="showuser.php"><span data-hover="Show Users">Show Users</span></a></li>
						<?php }elseif(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1){?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li class="active"><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>						
						<?php }elseif(isset($_SESSION['tid']) && $_SESSION['tid'] == True){?>
						<li><a href="index.php"><span data-hover="Home">Home</span></a></li>						
						<li><a href="services.php"><span data-hover="Services">Services</span></a></li>						
						<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
						<li><a href="courses.php"><span data-hover="About us">About US</span></a></li>
						<li class="active"><a href="forum.php"><span data-hover="Forum">Forum</span></a></li>
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
				<h3>User <span>Forum</span></h3>
			</div>
		</div>
	</div>
<!-- //banner -->


<!-- services1 -->
	<div class="courses">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_right">
					<h3>Community Forum For Your <span>Question And Queries</span></h3>
				</div>
				<div class="clearfix"> </div>				
			</div>			
				<div class="col-md-12">
					<div class="row">
						<div class="col-lg-6" id="tregister">
							<form action="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input class="form-control" name="ptitle" placeholder="Post Title" value="" type="text" required="">
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->									
								</div><!-- /.row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label class="form-group text-light">Write Your Post</label>
											<textarea class="form-control" name="fpost" id="exampleFormControlTextarea1" rows="4"></textarea>
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->									
								</div><!-- /.row -->
								<input type="submit" name="qsubmit" value="Make a Post">
							</form>
						</div>
						<div class="col-lg-6">							
								<div class="row pb-3">
									<div class="col-lg-12">
										<div class="form-group">
											<h2> <a href = ""> Showing All Posts</a>  </h2>												
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->									
								</div><!-- /.row -->
								
								<?php 
								
								$sql= "SELECT * from fpost";
								$result=$conn->query($sql);
								
								foreach($result as $row){
									$fpid    =$row['pid'];	?>
								<div class="row pb-3">
									<div class="col-lg-12">
										<div class="form-group">
											<div class="row">
												<div class="col-lg-6">
												 <label class="form-group text-light"  for=""><h4> Post Title <?=$row['ptitle']?> </h4></label>
												</div>
												<div class="col-lg-6">
												  <label class="form-group text-light"  for=""><h5>Post date <?=$row['time']?> </h5></label>
												</div>
											</div>											
											<textarea disabled class="form-control" name="" id="" rows="2"><?=$row['post']?></textarea>
											<label class="form-group text-light"  for=""><h4>Showing All Comments</h4></label>								
											
											<?php
											
																						
											$sql= "SELECT * FROM users, fcomment where fcomment.uid=users.uid AND `pid`='$fpid'";
											$resultans=$conn->query($sql);
											if(isset($resultans)===true) {
												foreach($resultans as $ans){	
												?>
											
											<textarea disabled class="form-control" name="" id="" rows="1"><?=$ans['comment']?></textarea>
											<div class="row">
												<div class="col-lg-6">
												 <label class="form-group text-light"  for=""><h4>Comment By <?=$ans['lname']?></h4></label>
												</div>
												<div class="col-lg-6">
												  <label class="form-group text-light"  for=""><h5>Comment date <?=$ans['time']?></h5></label>
												</div>
											</div>
											
											<?php
												}
											}?>
											
											<form action="" method="post" enctype="multipart/form-data">
											<div class="row">
												<div class="col-lg-9">
													<textarea class="form-control" name="comment" id="" rows="2"></textarea>
												</div>
												<div class="col-lg-2">
													<input type="submit" name="csubmit" class="btn btn-success" value="Comment">
													<input type="hidden" name="pid" value="<?=$row['pid']?>">													
												</div>
											</div>
											</form>
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->									
								</div><!-- /.row -->
								<?php  } ?>		
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>		
		</div>
	</div>
	
	<div class="clearfix"> </div>
<!-- //services1 -->


<!-- footer -->

<?php include 'templates/footer.php'; ?>
<!-- //footer -->
</body>
</html>