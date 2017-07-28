<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Customer_Loan_table ORDER BY Customer_Loan_id ASC");
?>
    <div class="card">
        <div class="card-header" data-background-color="red">
            <small i class="category">Loans </small>
        </div>
        <div class="card-content table-responsive">
            <table class="table" id="table1">
                <thead class="">
                <th>ID</th>
                <th>Loan Type</th>
                <th>Customer ID</th>
                <th>Amount</th>
                <th>Start Date</th>
                <th>Last date</th>
                <th></th>
                <th></th>
                </thead>
                <tbody>

                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>".$res['Customer_Loan_id']."</td>";
                    echo "<td class=''>".$res['Customer_Loan_Loan_id']."</td>";
                    echo "<td>".$res['Customer_Loan_Login_id']."</td>";
                    echo "<td class=''>".$res['Customer_Loan_amount']."</td>";
                    echo "<td class=''>".$res['Customer_Loan_DateTime']."</td>";
                    echo "<td class=''>".$res['Customer_Loan_paytime']."</td>";
                    echo "<td><a href=\"editloan.php?loa=$res[Customer_Loan_id]\" onClick=\"return confirm('Are you sure you want to edit?')\" class='fa fa-edit lg-2'></a></td>";
                    echo "<td><a href=\"delete.php?loa=$res[Customer_Loan_id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='fa fa-trash lg-2'></a></td>";
                }
              
                ?>
                </tbody>
                <tfoot>
                <tr class="bg-success">
                    <th>ID</th>
                    <th>Loan Type</th>
                    <th>Customer ID</th>
                    <th>Amount</th>
                    <th>Start Date</th>
                    <th>Last date</th>
                    <th></th>
                    <th></th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <!-- -->
<?php include "basef.php";?>