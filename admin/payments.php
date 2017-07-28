<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Loan_Payment_table ORDER BY Loan_Payment_id ASC");
?>
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <small i class="category">Payments </small>
        </div>
        <div class="card-content table-responsive">
            <table class="table" id="table1">
                <thead class="">
                <th>ID</th>
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
                    echo "<td class=''>".$res['Loan_Payment_id']."</td>";
                    echo "<td class=''>".$res['Loan_Payment_Customer_Login_id']."</td>";
                    echo "<td>".$res['Loan_Payment_amount']."</td>";
                    echo "<td class=''>".$res['Loan_Payment_DateTime']."</td>";
                    echo "<td><a href=\"editpay.php?pay=$res[Loan_Payment_id]\" onClick=\"return confirm('Are you sure you want to edit?')\" class='fa fa-edit lg-2'></a></td>";
                    echo "<td><a href=\"delete.php?pay=$res[Loan_Payment_id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='fa fa-trash lg-2'></a></td>";
                }
                ?>
                </tbody>
                <tfoot>
                <tr class="bg-success">
                    <th>ID</th>
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