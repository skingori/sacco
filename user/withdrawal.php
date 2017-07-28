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
<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Customer_Withdraw_table WHERE Customer_Withdraw_Login_id='$Login_id' ORDER BY Customer_Withdraw_id ASC");
?>
    <div class="card">
        <div class="card-header" data-background-color="green">
            <small i class="category">Withdrawals </small>
        </div>
        <div class="card-content table-responsive">
            <table class="table" id="table1">
                <thead class="">
                <th>ID</th>
                <th>Withdrawal ID</th>
                <th>Customer ID</th>
                <th>Amount</th>
                <th>DateTime</th>
                </thead>
                <tbody>

                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>".$res['Customer_Withdraw_id']."</td>";
                    echo "<td class=''>".$res['Customer_Withdraw_Withdraw_id']."</td>";
                    echo "<td>".$res['Customer_Withdraw_Login_id']."</td>";
                    echo "<td class=''>".$res['Customer_Withdraw_amount']."</td>";
                    echo "<td class=''>".$res['Customer_Withdraw_DateTime']."</td>";
                    
                }
                ?>
                </tbody>
                <tfoot>
                <tr class="bg-success">
                    <th>ID</th>
                    <th>Withdrawal ID</th>
                    <th>Customer ID</th>
                    <th>Amount</th>
                    <th>DateTime</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <!-- -->
<?php include "basef.php";?>