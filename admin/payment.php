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

    $Loan_Payment_Customer_Loan_id_ =$_POST['Loan_Payment_Customer_Loan_id'];
    $Loan_Payment_Customer_Login_id_ =$_POST['Loan_Payment_Customer_Login_id'];
    $Loan_Payment_amount_ =$_POST['Loan_Payment_amount'];
    $Loan_Payment_DateTime_ =$_POST['Loan_Payment_DateTime'];

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO Loan_Payment_table(Loan_Payment_Customer_Loan_id,Loan_Payment_amount,Loan_Payment_Customer_Login_id,Loan_Payment_DateTime)
VALUES ('$Loan_Payment_Customer_Loan_id_','$Loan_Payment_amount_', '$Loan_Payment_Customer_Login_id_', NOW())";

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
        <a href="javascript:window.open('loans.php','mypopuptitle','width=700,height=400')"><small>Get Loan ID</small></a>
        <div class="form-group label-floating">
            <label class="control-label">Loan Id</label>
            <select name="Loan_Payment_Customer_Loan_id" required class="form-control">
                <option selected></option>
                <?php
                $result = mysqli_query($con,"SELECT * FROM Customer_Loan_table");
                while($row = mysqli_fetch_array($result))
                {
                    echo '<option value="'.$row['Customer_Loan_id'].'">';
                    echo $row['Customer_Loan_id'];
                    echo '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Customer ID</label>
            <select name="Loan_Payment_Customer_Login_id" required class="form-control">
                <option selected></option>
                <?php
                $result = mysqli_query($con,"SELECT * FROM Customer_Loan_table");
                while($row = mysqli_fetch_array($result))
                {
                    echo '<option value="'.$row['Customer_Loan_Login_id'].'">';
                    echo $row['Customer_Loan_Login_id'];
                    echo '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Amount Paid</label>
            <input type="text" class="form-control" required name="Loan_Payment_amount">
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary" name="add" >Pay Loan</button>

        </div>


    </form>

    <!-- #END# add content -->

<?php include "basef.php";?>