<?php		
session_start();

	
	$tid 	= $_SESSION['tid'];
	

	if(isset($_POST['update'])){
	
	
	if(isset($_REQUEST['password']) && isset($_REQUEST['cpassword'])){
		if($_REQUEST['password'] != $_REQUEST['cpassword']){
			$message .= 'Password didn\'t match.\n';
			$okFlag = FALSE;
		}
	}
	
	$fname 		= $_REQUEST['fname'];
	$lname 		= $_REQUEST['lname'];
	$email 		= $_REQUEST['email'];
	$mobile 	= $_REQUEST['mnum'];		
	$gender 	= $_REQUEST['gender'];
	$address 	= $_REQUEST['address'];
	$dob		= $_REQUEST['dob'];
	$subject	= $_REQUEST['subjects'];
	$password 	= md5($_REQUEST['password']);
	
	include_once 'dbCon.php';
	$conn = connect();	
	$sql = "UPDATE `teacher` SET `fname`='$fname',`lname`='$lname',`email`='$email',`mobile`='$mobile',`gender`='$gender',`address`='$address',`dob`='$dob',`subject`='$subject',`password`='$password' WHERE `tid`='$tid'";
	$result = $conn->query($sql);		
	$message='Your Information sucessfully Updated.\n';
	
	}if($conn->query($sql)===TRUE){
				
		$_SESSION['msg'] = $message;
		header('location:profile.php');
	}
	

?>
	