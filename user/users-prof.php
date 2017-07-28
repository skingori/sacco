<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
//Get id
$id=$_GET['us'];
// Check connection

$result = mysqli_query($con, "SELECT * FROM Login_table WHERE Login_id='$id' ORDER BY Login_id ASC");
?>
    <div class="card">
        <div class="card-header" data-background-color="red">
            <small i class="category">Customer Details </small>
        </div>
        <div class="card-content table-responsive" style="font-family: Consolas">
            <table class="table" id="table1">
                <thead class="">
                <th>CUSTOMER ID</th>
                <th>NAME</th>
                <th>CONTACT</th>
                <th>EMAIL</th>

                </thead>
                <tbody>

                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>" . $res['Login_id'] . "</td>";
                    echo "<td class=''>" . $res['Login_fullname'] . "</td>";
                    echo "<td>" . $res['Login_contact'] . "</td>";
                    echo "<td class=''>" . $res['Login_email'] . "</td>";
                }

                ?>
                </tbody>
                <tfoot>
                <tr class="bg-success">
                    <th>CUSTOMER ID</th>
                    <th>NAME</th>
                    <th>CONTACT</th>
                    <th>EMAIL</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <!-- -->
<?php include "basef.php";?>