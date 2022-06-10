<!DOCTYPE html>
<html lang="en">

<?php
$con = mysqli_connect("localhost","root","","bank") or die(" can not connect");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}
//$q="SELECT * FROM detail WHERE id = '".$_GET["id"]."'";

$q="SELECT * FROM bank_balance WHERE c_account_no = '".$_GET['account_no']."'";
	$m = mysqli_query($con,$q);
	$row = mysqli_fetch_array($m);

session_start();
if(!isset($_SESSION["login_user"])){
 header("Location: login.html");
}
else
{
?>

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
          <a class="nav-link" href="eprofile.php?account_no=<?php echo $row['c_account_no'];?>">
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

			<h4>Name:<?php if($row)echo $row['c_name']?></h4>
              <i class="fas fa-table"></i>
              Account Statement</div>
            <div class="card-body">
              <div class="table-responsive">
				<form class="form-horizontal" role="form" method="POST" action="month.conn.php?account_no=<?php echo $row['c_account_no']?>" enctype="multipart/form-data">
					<pre>select Month  :   <input type="month" name="month">   <button type="submit" class="button">Submit</button></pre>
				</form><br>
				
				<form class="form-horizontal" role="form" method="POST" action="6month,conn.php?account_no=<?php echo $row['c_account_no']?>" enctype="multipart/form-data">
					<pre>6 Month       :    <input type="month" name = "month">   <button type="submit" class="button">Submit</button></pre>
				</form><br>
				
				<form class="form-horizontal" role="form" method="POST" action="week.conn.php?account_no=<?php echo $row['c_account_no']?>" enctype="multipart/form-data">
					<pre>Week          :    <input type="date" name = "date">   <button type="submit" class="button">Submit</button></pre>
				</form><br>
				
				<form class="form-horizontal" role="form" method="POST" action="year.conn.php?account_no=<?php echo $row['c_account_no']?>" enctype="multipart/form-data">
					<pre>year          :    <select name = "year">
					<?php
						for ($i = 2000; $i <= 2019; $i++)
						{ ?>
							<option value="<?php echo $i ?>"><?php echo $i;?></option>
						<?php
						}
					?>
					</select>    <button type="submit" class="button">Submit</button></pre>
					</form><br>
                <!--<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Account No.</th>
                      <th>Date</th>
                      <th>Income</t>
                      <th>Expence</th>
                      <th>Balance</th>
					  

                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                    </tr>
                    
                    <tr>
                      <td>Sonya Frost</td>
                      <td>Software Engineer</td>
                      <td>Edinburgh</td>
                      <td>23</td>
                      <td>2008/12/13</td>
                      <td>$103,600</td>
                    </tr>
                    <tr>
                      <td>Jena Gaines</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>30</td>
                      <td>2008/12/19</td>
                      <td>$90,560</td>
                    </tr>
                    <tr>
                      <td>Quinn Flynn</td>
                      <td>Support Lead</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2013/03/03</td>
                      <td>$342,000</td>
                    </tr>
                    <tr>
                      <td>Charde Marshall</td>
                      <td>Regional Director</td>
                      <td>San Francisco</td>
                      <td>36</td>
                      <td>2008/10/16</td>
                      <td>$470,600</td>
                    </tr>
                    <tr>
                      <td>Michael Silva</td>
                      <td>Marketing Designer</td>
                      <td>London</td>
                      <td>66</td>
                      <td>2012/11/27</td>
                      <td>$198,500</td>
                    </tr>
                    <tr>
                      <td>Paul Byrd</td>
                      <td>Chief Financial Officer (CFO)</td>
                      <td>New York</td>
                      <td>64</td>
                      <td>2010/06/09</td>
                      <td>$725,000</td>
                    </tr>
                    <tr>
                      <td>Gloria Little</td>
                      <td>Systems Administrator</td>
                      <td>New York</td>
                      <td>59</td>
                      <td>2009/04/10</td>
                      <td>$237,500</td>
                    </tr>
                    <tr>
                      <td>Bradley Greer</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>41</td>
                      <td>2012/10/13</td>
                      <td>$132,000</td>
                    </tr>
                    
                    
                    
                  </tbody>
                </table>-->
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
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