<?php 
session_start();
		
		$buid			= $_REQUEST['buid'];
		$btid			= $_REQUEST['btid'];
		$tname 			= $_REQUEST['tname'];
		$uname 			= $_REQUEST['uname'];
		$date	 		= $_REQUEST['doa'];		
		$mobile 		= $_REQUEST['mnum'];
			
		
		include_once "dbCon.php";
		$conn = connect(); 
		$sql = "SELECT * FROM appoint WHERE (tid='$btid') AND (date='$date')"; 
		$result = $conn->query($sql);

		
		
		
		
		if($result->num_rows <= 0){
			$sql = "INSERT INTO appoint(`tid`, `uid`, `tname`, `uname`, `mobile`, `date`) VALUES ('$btid','$buid','$tname','$uname','$mobile','$date')";
			
			if($conn->query($sql)===true){
				
				$to = $_SESSION['email'];
				$subject = "Information about Teacher Appointment through Recruite Teachers";
				$txt = "Your appointment is booked. Please come on time.";
				$headers = "From: test159125@gmail.com" . "\r\n" .
				"CC: test159125@gmail.com";

				mail($to,$subject,$txt,$headers);
				$_SESSION['msg'] = ' Your Appointment is Confirmed & Email has been sent';
				header('location:services.php?');
			}else{
				$_SESSION['msg'] = 'Database Error';
				header('location:booking.php');
			}
		}else{
			$_SESSION['msg'] = 'Appointment is not available, Please Select another Date or Teacher.\n';
			header('location:services.php');
		}
	
	
	
?>