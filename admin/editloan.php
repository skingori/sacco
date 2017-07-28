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

$id=$_REQUEST['loa'];
//Get the data
$result1 = mysqli_query($con, "SELECT * FROM Customer_Loan_table WHERE Customer_Loan_id='$id'");

while($res = mysqli_fetch_array($result1))
{
    $Customer_Loan_amount= $res['Customer_Loan_amount'];

}


if(isset($_POST['add'])) {

    $Customer_Loan_Loan_id_ =$_POST['Customer_Loan_Loan_id'];
    $Customer_Loan_Login_id_ =$_POST['Customer_Loan_Login_id'];
    $Customer_Loan_amount_ =$_POST['Customer_Loan_amount'];
    $Customer_Loan_paytime_ =$_POST['Customer_Loan_paytime'];


// Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE Customer_Loan_table SET Customer_Loan_Loan_id
='$Customer_Loan_Loan_id_' ,Customer_Loan_Login_id='$Customer_Loan_Login_id_'
,Customer_Loan_amount='$Customer_Loan_amount_'
,Customer_Loan_paytime='$Customer_Loan_paytime_'
 WHERE Customer_Loan_id=$id";

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

    header('refresh: 2; url=loans.php');
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
        <input type="text" class="form-control" required name="Customer_Loan_amount" value="<?php echo $Customer_Loan_amount?>">
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
