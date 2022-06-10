<?php
$fullname = $_POST['username'];
$email = $_POST['inputEmail'];
		$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
		// Make sure we connected successfully
		if(! $con)
		{
			die('Connection Failed'.mysqli_error());
		}

		$CheckSQL="SELECT * FROM bank_data WHERE fullname = '$fullname' AND email = '$email'";
		$query = mysqli_query($con,$CheckSQL);
		$user = mysqli_fetch_array($query);
		//echo $user['fullname'];
		
		if(!empty($user)) {?>
			<script>
				alert( 'We just emailed you a link.');
				</script><?php
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	
?>