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
}
else
{

    header('Location:index.php');
}
include '../connection/db.php';
$username=$_SESSION['logname'];

$result1 = mysqli_query($con, "SELECT * FROM staff_login WHERE Staff_Login_Name='$username'");

while($res = mysqli_fetch_array($result1))
{
    $name= $res['Staff_Login_Name'];
    $id=$res['Staff_Login_Id'];

}
/**
 * Created by PhpStorm.
 * User: king
 * Date: 03/04/2017
 * Time: 12:46
 */
// including the database connection file

//add header
include ('baseh.php');
?>


</form>
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="#pablo">
                    <img class="img" src="../assets/img/faces/user.jpg" />
                </a>
            </div>

            <div class="content">
                <h6 class="category text-gray">Systems Admin</h6>
                <h4 class="card-title">Mr. <?php echo $username?> </h4>
                <p class="card-content">
                    I am the admin of this system,working for tarclink and tevinson company.

                </p>
                <p>
                    My username is : <?php echo $username?> and <br>
                    My ID is : <?php echo $id?>
                </p>
                <a href="prof.php" class="btn btn-primary btn-round">Update Profile</a>
            </div>
        </div>
    </div>

<?php
//adding footer

include 'basef.php';
?>