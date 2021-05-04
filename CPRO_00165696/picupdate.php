<?php		
session_start();

	
	$tid 	= $_SESSION['tid'];
	
			
	if(isset($_FILES["uprf"]["name"]) && $_FILES["uprf"]["name"] != ''){
		//print_r($_FILES["uprf"]["name"]);exit;
		$target_dir = "images/uploads/prf/";
		$newprf = date('YmdHis_');
		$newprf .= basename($_FILES["uprf"]["name"]);
		$target_file = $target_dir . $newprf;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);		
		
				
		
		// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["uprf"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["uprf"]["size"] > 500000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		// Allow certain file formats
		if($imageFileType != "JPG" &&$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			$okFlag = FALSE;
		// if everything is ok, try to upload file
		} else {
			
			if(move_uploaded_file($_FILES["uprf"]["tmp_name"], $target_file)) {
				echo "The file ". $newprf. " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				$okFlag = FALSE;
			}
		}
		
		
	}else{
		$newprf = $_POST['uprf'];
		
	
	}
	
		include_once 'dbCon.php';
		$conn = connect();		
		$sql = "UPDATE `teacher` SET `prf`='$newprf' WHERE `tid`='$tid'";
		$resultupdate = $conn->query($sql);		
		$message='Your Profile Picture sucessfully Updated.\n';
		
	if($conn->query($sql)===TRUE){
				
		$_SESSION['msg'] = $message;
		header('location:profile.php');
	}
	
	
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
	
	
	$sql1 = "UPDATE `teacher` SET `fname`='$fname',`lname`='$lname',`email`='$email',`mobile`='$mobile',`gender`='$gender',`address`='$address',`dob`='$dob',`subject`='$subject',`password`='$password' WHERE `tid`='$tid'";
	$resultup = $conn->query($sql1);		
	$message='Your Information sucessfully Updated.\n';
	
	}if($conn->query($sql)===TRUE){
				
		$_SESSION['msg'] = $message;
		header('location:profile.php');
	}
	

?>
	