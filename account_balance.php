<?php

//$name = $_POST["name"];
//$account_no = $_POST["account"];
$date = $_POST["date"];
$list = $_POST["list"];
$ie = $_POST["income_exp"];
$note = $_POST["note"];
// Connect to the database
$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}

$b ="SELECT max(id) FROM bank_balance WHERE c_account_no='".$_GET["account_no"]."'";
$bal ="SELECT * FROM bank_balance WHERE id=($b)";
$m = mysqli_query($con,$bal);
$row = mysqli_fetch_array($m);

//echo $row['Id'];
//echo $row['c_name'];
$name=$row['c_name'];
$account_no=$row['c_account_no'];

if($list == "income")
{
	$income = $_POST["income_exp"];
}
else if($list == "expense")
{
	$expense = $_POST["income_exp"];
}

//echo  $income;
//echo  $expense;

if($income && !$expense)
{
	$balance = $income + $row['c_balance'];
}
else if($expense && !$income)
{
	$balance = $row['c_balance'] - $expense;
}
else if($income && $expense){
	$add = ($income + $row['c_balance']);
	$balance = ($add - $expense);
}
echo $balance; 
//$name = $_POST["name"];
//$account_no = $_POST["account"];
$date = $_POST["date"];

$note = $_POST["note"];

//echo $name;
//echo $ie;
//echo $date . "<br>";
$m = date("Y-m", strtotime( date( $date )." m"));

//$d = $dateArray['Y-m-d'];
//echo $y . "<br>";
//echo $m . "<br>";
//echo $d . "<br>";

$CheckSQL="INSERT INTO bank_balance(c_name ,c_account_no , c_date ,c_month ,c_income ,c_expense ,c_balance, note) 
			VALUES ('$name','$account_no','$date','$m','$income','$expense','$balance','$note')";
	//echo $balance;
$r = mysqli_query($con,$CheckSQL);
echo $r['c_account_no'];
//echo $r['c_name'];
if (!$r ) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
else{?>
         <script>
	     alert('Transaction Successfully' );
         window.location.href="income.php?account_no=<?php echo $row['c_account_no']?>";
         </script>
		 <?php
     }	

?>


