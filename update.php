<body>

<?php
// Grab User submitted information

$address = $_POST["Address"];
$email = $_POST["Email"];
$mobile = $_POST["Number"];
$i = $_POST["English"];

 $image = $_FILES['pic1']['name'];
 $target = "image/".basename($image);
 
 if (!$image)
 {
	$image = $i;	
 }

// Connect to the database
$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}

// Select the database to use
// mysqli_select_db("test",$con);

//$result = mysqli_query($con,"SELECT * FROM member WHERE username = $email");
			// $CheckSQL="UPDATE p_table SET firstname='$firstname',lastname='$lastname',
			// aboutme='$aboutme',country='$country',birthday='$birthday',
			// occupation='$occupation',email='$mail',mobile='$Mobile',profil='$image' WHERE id= '".$_GET["id"]."'";
			
$CheckSQL="UPDATE bank_data SET address='$address',phone='$mobile',
email='$email',Profile='$image' where account_no='".$_GET["account_no"]."'";
			
			if (move_uploaded_file($_FILES['pic1']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
			
			
//$row = mysqli_fetch_array(mysqli_query($con,$CheckSQL));

$res = mysqli_query($con,$CheckSQL);

if ($res) {
	$q="SELECT * FROM bank_data WHERE account_no = '".$_GET['account_no']."'";
	$m = mysqli_query($con,$q);
	$row = mysqli_fetch_array($m);
	?>
	

	 <script>
  alert('successfully updated data');
         window.location.href='eprofile.php?account_no=<?php echo $row['account_no']?>';
         </script>

	
	<?php	
} else {
    echo "Error ";
}
?>

</body>
</html>
