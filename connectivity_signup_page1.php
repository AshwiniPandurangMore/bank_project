<?php

// if (isset($_POST["submit"])) {
 $fullname = isset($_POST['Name']) ? ($_POST['Name']): '';
 $account_no = isset($_POST['number'])  ? ($_POST['number']): '';
 $email =    isset($_POST['inputEmail']) ? ($_POST['inputEmail']): '';
 $Address =  isset($_POST['address']) ? $_POST['address'] : '';
 $Phone_No = isset($_POST['mobile']) ? ($_POST['mobile']): '';
 $u_password = isset($_POST['Password'])  ? ($_POST['Password']): '';
 $con_password = isset($_POST['Confirm_Password'])  ? ($_POST['Confirm_Password']): '';
 
 
 /*$image = $_FILES['pic']['name'];
  	// Get text
  	// image file directory
  	$target = "upload/".basename($image);*/
 
 
 
 $con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
	if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
     
    $sql1 = "SELECT fullname,email FROM `bank_data` WHERE email= '$email'";
	// $sql1= "SELECT * FROM `bank_data` WHERE email='moreashwini@gmail.com' ";
	$m = mysqli_query($con,$sql1);
	$row = mysqli_fetch_array($m);
	
    // echo $row['email'];
	// $a=$row['fullname'];
	 $user=$row['fullname'];
	 //echo $a;
	  echo $user;
	if(!$user==$email){
	$sql= "INSERT INTO `bank_data` (`fullname`, `account_no`, `phone`, `email`, `Address`, `password`, `confirm_password`) 
	VALUES ('$fullname', '$account_no', '$Phone_No', '$email', '$Address', '$u_password', '$con_password')";
	
	$CheckSQL="INSERT INTO bank_balance(c_name ,c_account_no) 
			VALUES ('$fullname','$account_no')";
	$i = mysqli_query($con,$CheckSQL);	
     $r = mysqli_query($con,$sql);
	 echo $r['fullname'];
	 
	 if (!$r ) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
else{?>
	<script>
         window.location.href='login.html';
         </script>
		 <?php
}
	 
	
  }
 else{?>
         <script>
	     alert('User Already Register');
         window.location.href='login.html';
         </script>
		 <?php
     }	
?>

	



