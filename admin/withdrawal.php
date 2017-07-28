<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Customer_Withdraw_table ORDER BY Customer_Withdraw_id ASC");
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
                <th></th>
                <th></th>
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
                    echo "<td><a href=\"editwith.php?wit=$res[Customer_Withdraw_id]\" onClick=\"return confirm('Are you sure you want to edit?')\" class='fa fa-edit lg-2'></a></td>";
                    echo "<td><a href=\"delete.php?wit=$res[Customer_Withdraw_id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='fa fa-trash lg-2'></a></td>";
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
                    <th></th>
                    <th></th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <!-- -->
<?php include "basef.php";?>