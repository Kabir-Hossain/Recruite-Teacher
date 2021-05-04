<!DOCTYPE html>
<html lang="en">
<!-- Head  -->

<?php include 'templates/header.php';

if(isset($_SESSION['msg'])){
		echo '<script type="text/javascript">alert("' . $_SESSION['msg']. '")</script>';
		unset($_SESSION['msg']);
	}
	
	
	include_once 'dbCon.php';
		$con = connect();
		$sql= "SELECT * from users";
		$result=$con->query($sql);

	if(isset($_GET['aid'])){
		$uid = $_GET['aid'];

				
		$con= connect();
		$sql= "DELETE FROM `users` WHERE `uid`='$uid'";
		$resultData=$con->query($sql);
		$msg1 ='Users has been Deleted from database.\n';
		$message=$msg1;
		$_SESSION['msg'] = $message;
		header('location:showuser.php');
		
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
						<li class="active"><a href="showuser.php"><span data-hover="Show Users">Show Users</span></a></li>
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
				<h3><span>Showing  </span>Users List</h3>
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
	
	<!-- Unapproved Teachers -->
	
	<div class="container"> 	
		<div class="w3_agile_team_grid">
			<div class="w3_agile_team_grid_left">
				<p>01</p>
				<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
			</div>
			<div class="w3_agile_team_grid_right">
				<h3><span>Showing </span>All Users</h3>
				<p>This is a List of Users</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
		
	
	<div class="container emp-profile">
		<table class="table table-striped">
			<tr>
				<th>User Name</th>
				<th>Address</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Delete</th>
			</tr>
			<?php
				foreach($result as $row){ ?>
			<tr>
				<td><?=$row['fname']?> <?=$row['lname']?></td>
				<td><?=$row['address']?></td>
				<td><?=$row['mobile']?></td>
				<td><?=$row['email']?></td>				
				<td><a href="<?=BASE_URL?>/showuser.php?aid=<?=$row['uid']?>" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php  } ?>				
		</table>   
	</div>	
	<hr>
	<!--End Unapproved Teachers -->

<!-- footer -->

<?php include 'templates/footer.php'; ?>
<!-- //footer -->
</body>
</html>