<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Customer_Deposit_table ORDER BY Customer_Deposit_id ASC");
?>
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <small i class="category">Deposits </small>
        </div>
        <div class="card-content table-responsive">
            <table class="table" id="table1">
                <thead class="">
                <th>ID</th>
                <th>Deposit ID</th>
                <th>Customer ID</th>
                <th>Amount</th>
                <th>Date</th>
                <th></th>
                <th></th>
                </thead>
                <tbody>

                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>".$res['Customer_Deposit_id']."</td>";
                    echo "<td class=''>".$res['Customer_Deposit_Dep_id']."</td>";
                    echo "<td>".$res['Customer_Deposit_Login_id']."</td>";
                    echo "<td class=''>".$res['Customer_Deposit_amout']."</td>";
                    echo "<td class=''>".$res['Customer_Deposit_DateTime']."</td>";
                    echo "<td><a href=\"editdep.php?dep=$res[Customer_Deposit_id]\" onClick=\"return confirm('Are you sure you want to edit?')\" class='fa fa-edit lg-2'></a></td>";
                    echo "<td><a href=\"delete.php?dep=$res[Customer_Deposit_id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='fa fa-trash lg-2'></a></td>";
                }
                ?>
                </tbody>
                <tfoot>
                <tr class="bg-success">
                    <th>ID</th>
                    <th>Deposit ID</th>
                    <th>Customer ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <!-- -->
<?php include "basef.php";?>