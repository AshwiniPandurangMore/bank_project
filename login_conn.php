<?php

// Grab User submitted information
//$fullname = $_POST["name"];

//echo $EmailId;
// Connect to the database
$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
	
$EmailId=$_POST['inputEmail'];
$pass=$_POST['inputPassword'];

//echo "<br>";

$CheckSQL="SELECT * FROM bank_data WHERE email = '$EmailId' AND password = '$pass'";
//$row = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
$query = mysqli_query($con,$CheckSQL);
$m = mysqli_fetch_array($query);
$row=mysqli_num_rows($query);

if($row != 0)
{
	session_start();
	$_SESSION['login_user']=$EmailId;
 ?>
   <script>
  alert('You Are Validate User');
         window.location.href='eprofile.php?account_no=<?php echo $m['account_no']?>';
         </script><?php
}
		
else{
	 
?>
	<script>
  alert('Sorry, your credentials are not valid, Please try again.');
         window.location.href='login.html';
         </script><?php
		 
}

?>