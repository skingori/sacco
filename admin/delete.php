<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 02/04/2017
 * Time: 00:07
 */


//including the database connection file
include("../connection/db.php");

if (isset($_GET['dep'])){
//getting id of the data from url
$dep = $_GET['dep'];
//deleting the row from table
$result = mysqli_query($con, "DELETE FROM Customer_Deposit_table WHERE Customer_Deposit_id=$dep ");
//$result = mysqli_query($con, "DELETE FROM login_table WHERE login_username=$id");
//redirecting to the display page (index.php in our case)
header("Location:deposits.php");
}

if (isset($_GET['wit'])){
   $wit =$_GET['wit']; //deleting feeds
   $result = mysqli_query($con, "DELETE FROM Customer_Withdraw_table WHERE Customer_Withdraw_id=$wit ");
   
   header("Location:withdrawal.php");
   
}

if (isset($_GET['loa'])){
   $loa =$_GET['loa']; //deleting feeds
   $result = mysqli_query($con, "DELETE FROM Customer_Loan_table WHERE Customer_Loan_id=$loa ");
   
   header("Location:loans.php");
   
}
if (isset($_GET['pay'])){
   $pay =$_GET['pay']; //deleting feeds
   $result = mysqli_query($con, "DELETE FROM Loan_Payment_table WHERE Loan_Payment_id=$pay ");
   
   header("Location:payments.php");
   
}

if (isset($_GET['rt'])){
   $rt =$_GET['rt']; //deleting feeds
   $result = mysqli_query($con, "DELETE FROM flight_route_table WHERE Flight_route_id=$rt ");
   
   header("Location:all-flight-rout.php");
   
}

if (isset($_GET['art'])){
   $art =$_GET['art']; //deleting feeds
   $result = mysqli_query($con, "DELETE FROM routes_table WHERE Route_id=$art ");
   
   header("Location:all-routes.php");
   
}
if (isset($_GET['us'])){
   $us =$_GET['us']; //deleting feeds
   $result = mysqli_query($con, "DELETE FROM login_table WHERE Login_id=$us ");
   
   header("Location:allusers.php");
   
}