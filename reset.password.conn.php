<?php
echo $_SERVER["account"];
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "bank");
		$sql = "UPDATE `bank`.`bank_data` SET `password` = '" . ($_POST["password"]). "' WHERE `bank_data`.`account_no` = '" . $_GET["account"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";
		
	}
/*
$password = isset($_POST['password']) ? ($_POST['password']): '';
$conform_password = isset($_POST['conform-password']) ? ($_POST['conform-password']): '';


$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
		// Make sure we connected successfully
		if(! $con)
		{
			die('Connection Failed'.mysqli_error());
		}
	
$CheckSQL="UPDATE `bank_data` SET `password`='$password',`confirm_password`='$conform_password' WHERE `fullname` = '".$_GET['fullname']."'";
$res = mysqli_query($con,$CheckSQL);
echo $res['fullname'];
if (!$res){
	echo "error";
}
else{
	echo "Data updatetd";
}*/
?>