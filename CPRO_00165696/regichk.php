<?php 
	session_start();
	
	$okFlag = TRUE;
	$message = '';	
	
	if(isset($_REQUEST['password']) && isset($_REQUEST['cpassword'])){
		if($_REQUEST['password'] != $_REQUEST['cpassword']){
			$message .= 'Password didn\'t match.\n';
			$okFlag = FALSE;
		}
	}
	
	if($okFlag){
				
		$fname 		= $_REQUEST['fname'];
		$lname 		= $_REQUEST['lname'];
		$email 		= $_REQUEST['email'];
		$mobile 		= $_REQUEST['mnum'];		
		$gender 		= $_REQUEST['gender'];
		$address 		= $_REQUEST['address'];
		$password 	= md5($_REQUEST['password']);		
		
		include_once "dbCon.php";
		$conn = connect();
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = $conn->query($sql);		
		
		if($result->num_rows <= 0){
			$sql = "INSERT INTO users(fname,lname,email,mobile,gender,address,password) VALUES ('$fname','$lname','$email','$mobile','$gender','$address','$password')";
			
			if($conn->query($sql)){
				$_SESSION['msg'] = 'Successfully Registered';
				header('location:index.php?');
			}else{
				$_SESSION['msg'] = 'Database Error';
				header('location:registration.php');
			}
		}else{
			$_SESSION['msg'] = 'email already exist.\n';
			header('location:registration.php');
		}
	}else{
		$_SESSION['msg'] = $message;
		header('location:registration.php?msg='.$message);
	}