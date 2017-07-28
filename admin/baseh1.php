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

                <li>
                    <a href="deps.php">
                        <i class="material-icons">Deposits</i>
                        <p>Deposits</p>
                    </a>
                </li>
                <li>
                    <a href="loa.php">
                        <i class="material-icons">L</i>
                        <p>Loans</p>
                    </a>
                </li>
                <li>
                    <a href="withd.php">
                        <i class="material-icons">W</i>
                        <p>Withdraw</p>
                    </a>
                </li>
                <li class="active">
                    <a href="index.php">
                        <i class="material-icons">group</i>
                        <p>Preferences</p>
                    </a>
                </li>
                <li>
                    <a href="users.php">
                        <i class="material-icons">person</i>
                        <p>Our Customers</p>
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


                    <a class="navbar-brand" href="#">Main page</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">assignment</i>
                                <p class="hidden-lg hidden-md">assignment</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><i class="fa fa-paperclip"><a href="deposits.php"> Deposits</a></li></i>
                                <li><i class="fa fa-paperclip"><a href="withdrawal.php"> Withdrawals</a></li></i>
                                <li role="presentation" class="divider"></li>
                                <li><i class="fa fa-paperclip"><a href="loans.php"> Loans</a></li></i>
                                <li><i class="fa fa-paperclip"><a href="payments.php"> Payments</a></li></i>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="new-user.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
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