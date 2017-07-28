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

$id=$_REQUEST['wit'];
//Get the data
$result1 = mysqli_query($con, "SELECT * FROM Customer_Withdraw_table WHERE Customer_Withdraw_id='$id'");

while($res = mysqli_fetch_array($result1))
{
    $Customer_Withdraw_Withdraw_id= $res['Customer_Withdraw_Withdraw_id'];
    $Customer_Withdraw_Login_id= $res['Customer_Withdraw_Login_id'];
    $Customer_Withdraw_amount= $res['Customer_Withdraw_amount'];


}


if(isset($_POST['add'])) {

$Customer_Withdraw_Withdraw_id_ =$_POST['Customer_Withdraw_Withdraw_id'];
$Customer_Withdraw_Login_id_ =$_POST['Customer_Withdraw_Login_id'];
$Customer_Withdraw_amount_ =$_POST['Customer_Withdraw_amount'];
$Customer_Withdraw_DateTime_ =$_POST['Customer_Withdraw_DateTime'];


// Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE Customer_Withdraw_table SET Customer_Withdraw_Withdraw_id
='$Customer_Withdraw_Withdraw_id_' ,Customer_Withdraw_Login_id='$Customer_Withdraw_Login_id_',Customer_Withdraw_amount
='$Customer_Withdraw_amount_' WHERE Customer_Withdraw_id=$id";

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

    header('refresh: 2; url=withdrawal.php');
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

    <div class="form-group label-floating" hidden>
        <label class="control-label">ID</label>
        <input type="text" class="form-control" required name="Customer_Withdraw_id" value="<?php echo $id ?>">
    </div>

    <a href="javascript:window.open('with-type.php','mypopuptitle','width=700,height=400')"><small>Get withdrawal id</small></a>
    <div class="form-group label-floating">
        <label class="control-label">Withdrawal ID [Current ID : <?php echo $Customer_Withdraw_Withdraw_id?>]</label>
        <select name="Customer_Withdraw_Withdraw_id" required class="form-control">
            <option selected></option>
            <?php
            $result = mysqli_query($con,"SELECT * FROM Withdraw_table");
            while($row = mysqli_fetch_array($result))
            {
                echo '<option value="'.$row['Withdraw_id'].'">';
                echo $row['Withdraw_id'];
                echo '</option>';
            }
            ?>
        </select>
    </div>
    <div class="form-group label-floating">
        <label class="control-label">Customer ID [Current ID : <?php echo $Customer_Withdraw_Login_id?>]</label>
        <select name="Customer_Withdraw_Login_id" required class="form-control">
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
        <label class="control-label">Withdrawal Amount</label>
        <input type="text" class="form-control" required name="Customer_Withdraw_amount" value="<?php echo $Customer_Withdraw_amount?>">
    </div>

    <div class="form-group">

        <button type="submit" class="btn btn-primary" name="add" >Withdraw Cash</button>

    </div>


</form>

<!-- #END# add content -->

<?php include "basef.php";?>