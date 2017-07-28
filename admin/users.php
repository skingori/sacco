<?php include "baseh.php";?>
    <!-- -->
<?php

include "../connection/db.php";
// Check connection


$result = mysqli_query($con, "SELECT * FROM Login_table WHERE Login_rank='1' ORDER BY Login_id ASC");
?>
    <div class="card">
        <div class="card-header" data-background-color="red">
            <small i class="category">All Customers </small>
        </div>
        <div class="card-content table-responsive">
            <table class="table" id="table1">
                <thead class="">
                <th>CUSTOMER ID</th>
                <th>NAME</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
                <th><i class="fa fa-trash-o" ></i></th>
                </thead>
                <tbody>

                <?php
                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>".$res['Login_id']."</td>";
                    echo "<td class=''>".$res['Login_fullname']."</td>";
                    echo "<td>".$res['Login_contact']."</td>";
                    echo "<td class=''>".$res['Login_email']."</td>";
                    echo "<td><a href=\"delete.php?us=$res[Login_id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='fa fa-trash lg-2'></a></td>";
                }

                ?>
                </tbody>
                <tfoot>
                <tr class="bg-success">
                    <th>CUSTOMER ID</th>
                    <th>NAME</th>
                    <th>CONTACT</th>
                    <th>EMAIL</th>
                    <th><i class="fa fa-trash-o" ></i></th>
                </tr>
                </tfoot>
            </table>

            <button class="btn btn-danger" onClick="document.location.href='new-user.php'" ><i class="fa fa-plus-square-o"></i> Add Customer </button>

        </div>


    </div>
    <!-- -->

<?php include "basef.php";?>