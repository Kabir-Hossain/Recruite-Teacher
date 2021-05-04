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
	
	if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != ''){
		//print_r($_FILES["fileToUpload"]["name"]);exit;
		$target_dir = "images/uploads/ssc/";
		$newName = date('YmdHis_');
		$newName .= basename($_FILES["fileToUpload"]["name"]);
		$target_file = $target_dir . $newName;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);		
		
		// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
		if ($_FILES["fileToUpload"]["size"] > 500000000) {
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
			
			if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". $newName. " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				$okFlag = FALSE;
			}
		}
		
	}else{
		$newName = $_POST['ssc'];
		
				
		
	}
	
	if(isset($_FILES["hsc"]["name"]) && $_FILES["hsc"]["name"] != ''){
		//print_r($_FILES["fileToUpload"]["name"]);exit;
		$target_dir = "images/uploads/hsc/";
		$newhsc = date('YmdHis_');
		$newhsc .= basename($_FILES["hsc"]["name"]);
		$target_file = $target_dir . $newhsc;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);		
		
		// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["hsc"]["tmp_name"]);
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
		if ($_FILES["hsc"]["size"] > 500000000) {
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
			
			if(move_uploaded_file($_FILES["hsc"]["tmp_name"], $target_file)) {
				echo "The file ". $newhsc. " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				$okFlag = FALSE;
			}
		}
		
	}else{
		$newhsc = $_POST['hsc'];
		
				
		
	}
	
	if(isset($_FILES["mst"]["name"]) && $_FILES["mst"]["name"] != ''){
		//print_r($_FILES["fileToUpload"]["name"]);exit;
		$target_dir = "images/uploads/mst/";
		$newmst = date('YmdHis_');
		$newmst .= basename($_FILES["mst"]["name"]);
		$target_file = $target_dir . $newmst;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);		
		
		// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["mst"]["tmp_name"]);
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
		if ($_FILES["mst"]["size"] > 500000000) {
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
			
			if(move_uploaded_file($_FILES["mst"]["tmp_name"], $target_file)) {
				echo "The file ". $newmst. " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				$okFlag = FALSE;
			}
		}
		
	}else{
		$newmst = $_POST['mst'];
		
				
		
	}
	
	if(isset($_FILES["prf"]["name"]) && $_FILES["prf"]["name"] != ''){
		//print_r($_FILES["fileToUpload"]["name"]);exit;
		$target_dir = "images/uploads/prf/";
		$newprf = date('YmdHis_');
		$newprf .= basename($_FILES["prf"]["name"]);
		$target_file = $target_dir . $newprf;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);		
		
		// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["prf"]["tmp_name"]);
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
		if ($_FILES["prf"]["size"] > 500000000) {
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
			
			if(move_uploaded_file($_FILES["prf"]["tmp_name"], $target_file)) {
				echo "The file ". $newprf. " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				$okFlag = FALSE;
			}
		}
		
	}else{
		$newprf = $_POST['prf'];
		
				
				
	}
	
	
	
	if($okFlag){
				
		$fname 		= $_REQUEST['fname'];
		$lname 		= $_REQUEST['lname'];
		$email 		= $_REQUEST['email'];
		$mobile 	= $_REQUEST['mnum'];		
		$gender 	= $_REQUEST['gender'];
		$address 	= $_REQUEST['address'];
		$dob		= $_REQUEST['dob'];
		$subject	= $_REQUEST['subjects'];
		$password 	= md5($_REQUEST['password']);
		
		
		include_once "dbCon.php";
		$conn = connect();
		$sql = "SELECT * FROM teacher WHERE email='$email'";
		$result = $conn->query($sql);		
		
		if($result->num_rows <= 0){
			$sql = "INSERT INTO teacher(fname,lname,email,mobile,gender,address,dob,subject,password,ssc,hsc,mst,prf) VALUES ('$fname','$lname','$email','$mobile','$gender','$address','$dob','$subject','$password','$newName','$newhsc','$newmst','$newprf')";
			
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