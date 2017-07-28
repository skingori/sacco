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

        case 2:
            header('location:../user/index.php');//redirect to  page
            break;

    }
}elseif(!isset($_SESSION['logname']) && !isset($_SESSION['rank'])) {
    header('Location:../sessions.php');
}
else
{

    header('Location:index.php');
}
?>

<?php


// Create connection
include "../connection/db.php";
// Check connection

if(isset($_POST['add'])) {

    $Customer_Loan_Loan_id_ =$_POST['Customer_Loan_Loan_id'];
    $Customer_Loan_Login_id_ =$_POST['Customer_Loan_Login_id'];
    $Customer_Loan_amount_ =$_POST['Customer_Loan_amount'];
    $Customer_Loan_paytime_ =$_POST['Customer_Loan_paytime'];



    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO Customer_Loan_table(Customer_Loan_Loan_id,Customer_Loan_Login_id,Customer_Loan_amount,Customer_Loan_DateTime,Customer_Loan_paytime )
VALUES ('$Customer_Loan_Loan_id_', '$Customer_Loan_Login_id_', '$Customer_Loan_amount_',NOW(),'$Customer_Loan_paytime_')";

    if ($con->query($sql) === TRUE) {
        $msg = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
            </div>";
    } else {

        $msg = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
            </div>" . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>

<?php include "baseh.php";?>

    <!-- Add content -->

    <form id="" method="POST">
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
        <a href="javascript:window.open('loan-type.php','mypopuptitle','width=700,height=400')"><small>View loan types</small></a>
        <div class="form-group label-floating">
            <label class="control-label">Loan type ID</label>
            <select name="Customer_Loan_Loan_id" required class="form-control">
                <option selected></option>
                <?php
                $result = mysqli_query($con,"SELECT * FROM Loan_table");
                while($row = mysqli_fetch_array($result))
                {
                    echo '<option value="'.$row['Loan_id'].'">';
                    echo $row['Loan_id'];
                    echo '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Customer ID</label>
            <select name="Customer_Loan_Login_id" required class="form-control">
                <option selected></option>
                <?php
                $result = mysqli_query($con,"SELECT * FROM Login_table");
                while($row = mysqli_fetch_array($result))
                {
                    echo '<option value="'.$row['Login_id'].'">';
                    echo $row['Login_id'];
                    echo '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Amount to Loan</label>
            <input type="text" class="form-control" required name="Customer_Loan_amount">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Loan Payment Time</label>
            <input type="date" class="form-control" required name="Customer_Loan_paytime">
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary" name="add" >Give Loan</button>

        </div>


    </form>

    <!-- #END# add content -->

<?php include "basef.php";?>