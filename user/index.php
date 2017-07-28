<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 01/04/2017
 * Time: 11:24
 */
// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['logname']) && isset($_SESSION['rank'])) {
    switch($_SESSION['rank']) {

        case 1:
            header('location:../admin/index.php');//redirect to  page
            break;

    }
}elseif(!isset($_SESSION['logname']) && !isset($_SESSION['rank'])) {
    header('Location:../sessions.php');
}
else
{

    header('Location:index.php');
}


include "../connection/db.php";
// Check connection
$username=$_SESSION['logname'];

$result1 = mysqli_query($con, "SELECT * FROM Login_table WHERE Login_username='$username'");

while($res = mysqli_fetch_array($result1))
{
    $Login_id= $res['Login_id'];

}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Home</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="" class="simple-text">
                    KIAMBU FARMERS SACCO
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="index.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Homepage</p>
	                    </a>
	                </li>

	              
                    


					<li class="active-pro">
	                    <a href="prof.php">
	                        <i class="material-icons">settings</i>
	                        <p>Settings</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Logged-in as <?php echo $username?></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<p class="hidden-lg hidden-md">person</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="myprof.php">Profile</a></li>
									<li><a href="../logout.php?logout">Logout</a></li>

								</ul>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="">
                                    <a href="deposits.php"><i class="fa fa-dollar"></a></i></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Deposits</p>
                                    <h3 class="title"><small><i class="fa fa-home"></i></small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-plus"></i> <a href=""> Deposits</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="">
                                    <a href="withdrawal.php"><i class="material-icons">Withdrawal</i></a>
                                </div>
                                <div class="card-content">
                                    <p class="category">Withdrawals</p>
                                    <h3 class="title"><small><i class="fa fa-home"></i></small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-plus"></i> <a href=""> Withdraw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="">
                                    <a href="loans.php"> <i class="fa fa-credit-card-alt"></i></a>
                                </div>
                                <div class="card-content">
                                    <p class="category">Loans</p>
                                    <h3 class="title"><small><i class="fa fa-home"></i></small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-plus"></i> <a href=""> Loan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header bg-primary" data-background-color="">
                                    <a href="payments.php"> <i class="fa fa-money"></i></a>
                                </div>
                                <div class="card-content">
                                    <p class="category">Payments</p>
                                    <h3 class="title"><small><i class="fa fa-home"></i></small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-plus"></i> <a href=""> Payment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- -->
                    <?php

                    include "../connection/db.php";
                    // Check connection

                    $result = mysqli_query($con, "SELECT * FROM Customer_Loan_table WHERE Customer_Loan_Login_id='$Login_id' ORDER BY Customer_Loan_id ASC");

                    ?>
                    <div class="card">
                        <div class="card-content table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="" style="font-family: 'Console'">
                                <th>ID</th>
                                <th>Loan Type</th>
                                <th>Customer ID</th>
                                <th>Amount</th>
                                <th>Loan Pay-time</th>
                                <th>Other Details</th>
                                </thead>
                                <tbody>

                                <?php
                                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                                while($res = mysqli_fetch_array($result)) {
                                    echo "<tr class=''>";
                                    echo "<td class='text-primary'>" . $res['Customer_Loan_id'] . "</td>";
                                    echo "<td>" . $res['Customer_Loan_Loan_id'] . "</td>";
                                    echo "<td class=''>" . $res['Customer_Loan_Login_id'] . "</td>";
                                    echo "<td class=''>" . $res['Customer_Loan_amount'] . "</td>";
                                    echo "<td class=''>" . $res['Customer_Loan_paytime'] . "</td>";
                                    echo "<td><a href=\"javascript:window.open('users-prof.php?us=$res[Customer_Loan_Login_id]','mypopuptitle','width=700,height=400')\"><small>Click here</small></a></td>";


                                }
                                ?>
                                </tbody>
                                <tfoot class="">
                                <th>ID</th>
                                <th>Loan Type</th>
                                <th>Customer ID</th>
                                <th>Amount</th>
                                <th>Loan Pay-time</th>
                                <th>Other Details</th>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                <!-- -->


				</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Home
								</a>
							</li>
							<li>
								<a href="#">
									Faq
								</a>
							</li>
							<li>
								<a href="#">
									Help
								</a>
							</li>

						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="">tarclink</a>, for incredible
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
