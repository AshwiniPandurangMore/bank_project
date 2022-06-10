<?php
$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
$q="SELECT * FROM bank_balance` WHERE c_account_no = '".$_GET["account_no"]."'";
	$m = mysqli_query($con,$q);
	$row = mysqli_fetch_array($m);

session_start();
if(!isset($_SESSION["login_user"])){
 header("Location: login.html");
}
else
{?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>record</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	

	
  </head>
 

  <body id="page-top">
 

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top"style="background-color: white !important">

      <a class="navbar-brand mr-1" href="index.html"></a>
	  
	  <button class="btn btn-link btn-sm text-Black order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
	  
	  <div>
			<img src="image\axis.jpg" width="80" height="50" class="responsive">
	  </div>
	  
	  <div>
	  <h1 style="color:#9a3973">AXIS BANK</h1>
	  </div>

      

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!--<div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>-->
        </div>
      </form>

      <!-- Navbar -->
     <ul class="navbar-nav ml-auto ml-md-0">
        <!--<li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw-16 fa-2x" style="color:black"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!--<a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>-->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <!--<li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Account</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <!-- <h6 class="dropdown-header">Login Screens:</h6>-->
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="registers.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
           <!-- <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item active" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>-->
          </div>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="eprofile.php?account_no=<?php echo $row['c_account_no']?>">
            <i class="fas fa-user-circle"></i>
            <span>Profile</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php?account_no=<?php echo $row['c_account_no']?>">
            <i class="fas fa-user-circle"></i>
            <span>Edit Profile</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="income.php?account_no=<?php echo $row['c_account_no']?>">
            <i class="fab fa-wpforms"></i>
            <span>Income Form</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="record.php?account_no=<?php echo $row['c_account_no']?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Account Status</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Customer Record</a>
            </li>
            <li class="breadcrumb-item active"></li>
          </ol>-->

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
			<h4>Name:<?php echo $row['c_name'];?></h4>
              <i class="fas fa-table"></i>
             Weekly Record</div>
            <div class="card-body">
              <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">	
<?php
$week = $_POST['date'];
echo $week . "<br>";

$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
for ($i = 0; $i < 6; $i++) 
{
   $days[] = date("Y-m-d", strtotime( date( $week )." -$i days"));
}
echo $days . "<br>";
print_r ($days[0]). "<br>";
print_r ($days[1]). "<br>";
print_r ($days[2]). "<br>";
print_r ($days[3]). "<br>";
print_r ($days[4]). "<br>";
print_r ($days[5]). "<br>";

$q = "SELECT * FROM `bank_balance` WHERE c_date IN('$days[0]', '$days[1]', '$days[2]', '$days[3]', '$days[4]', '$days[5]') AND c_account_no = '".$_GET['account_no']."'";
$m = mysqli_query($con,$q);	
	while ($r = mysqli_fetch_array($m))		
	 { 	 ?>
						  <tr>
							<td><?php echo ++$i;?><font size="1"></font></td>
							<td><?php echo $r['c_name'] ?></td>
							<td><?php echo $r['c_date'] ?></td>
							<td><?php echo $r['c_income'] ?></td>
							<td><?php echo $r['c_expense'] ?></td>
							<td><?php echo $r['c_balance'] ?></td>
							<td><?php echo $r['note'] ?></td>
						  </tr>		
<?php
	}
?>
						</tbody>
					  </table>
</div>
            </div>
            <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
          </div>

          <p class="small text-center text-muted my-5">
            <em></em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Axis bank 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
<?php } ?>