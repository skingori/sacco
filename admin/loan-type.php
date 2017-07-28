<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Loan_table ORDER BY Loan_id ASC");
?>
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <small i class="category">Payments </small>
        </div>
        <div class="card-content table-responsive">
            <table class="table" id="table1">
                <thead class="">
                <th>ID</th>
                <th>Type</th>
                <th>Description</th>

                </thead>
                <tbody>

                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>".$res['Loan_id']."</td>";
                    echo "<td class=''>".$res['Loan_type']."</td>";
                    echo "<td class=''>".$res['Loan_description']."</td>";

                }
                ?>
                </tbody>
                <tfoot>
                <tr class="bg-success">
                    <th>ID</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <!-- -->
<?php include "basef.php";?>