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


// Create connection
include "../connection/db.php";

$id=$_REQUEST['pay'];
//Get the data
$result1 = mysqli_query($con, "SELECT * FROM Loan_Payment_table WHERE Loan_Payment_id='$id'");

while($res = mysqli_fetch_array($result1))
{
    $Loan_Payment_amount= $res['Loan_Payment_amount'];

}


if(isset($_POST['add'])) {

    $Loan_Payment_Customer_Loan_id_ =$_POST['Loan_Payment_Customer_Loan_id'];
    $Loan_Payment_amount_ =$_POST['Loan_Payment_amount'];
    $Loan_Payment_DateTime_ =$_POST['Loan_Payment_DateTime'];



// Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE Loan_Payment_table SET Loan_Payment_Customer_Loan_id
='$Loan_Payment_Customer_Loan_id_' ,Loan_Payment_amount='$Loan_Payment_amount_' WHERE Loan_Payment_id=$id";

    if (mysqli_query($con, $sql)) {

        $msg = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
            </div>";

    } else {

        $msg = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
            </div>" . $sql . "<br>" . $con->error;
    }

    mysqli_close($con);

    header('refresh: 2; url=payments.php');
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
            <label class="control-label">Amount Paid</label>
            <input type="text" class="form-control" required name="Loan_Payment_amount" value="<?php echo $Loan_Payment_amount?>">
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary" name="add" >Update Loan</button>

        </div>


    </form>

    <!-- #END# add content -->

<?php include "basef.php";?>