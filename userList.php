<?php include ("layout/beforeSearchMaster.php");?>



<div class="social clear">
    <div class="searchbtn clear">

        <input type="text" name="search"   value="" placeholder="Search keyword..."/>
        <input type="submit" name="submit" value="Search"/>
    </div>
</div>


<?php include("layout/afterSearchMasterUserAdmin.php");?>






<div class="features_area section_gap_change">





                    <span class="contact100-form-title-1">
                       User List
                    </span>

        <div class="containerChange">


            <div class="col-12Change2">
                <a class="primary-btn text-uppercase"  href="userAddEdit.php">Add User</a>
            </div>

            <div class="col-12Change1">
                <a class="primary-btn text-uppercase"  href="userDetailsList.php">User Details List</a>
            </div>


                <table class="responstable">

                    <tr>
                        <td>ID</td>
                        <td>Student Id</td>
                        <td>Username</td>
                        <td>EMAIL</td>
                        <td>Amount</td>
                        <td>User Type</td>
                        <td>ACTION</td>
                    </tr>



                        <tr>
                        <td>1</td>
                        <td>201512010</td>
                        <td>Abdur Rahim</td>
                        <td>rahim312@gmail.com</td>
                        <td>400</td>
                        <td>Admin</td>


                        <td>
                            <a href="users/edit">Edit /</a>
                            <a href="users/delete">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>201512034</td>
                        <td>Latifa Khatun</td>
                        <td>latifa@gmail.com</td>
                        <td>600</td>
                        <td>User</td>


                        <td>
                            <a href="users/edit">Edit /</a>
                            <a href="users/delete">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>201512034</td>
                        <td>Abdur Karim</td>
                        <td>karim312@gmail.com</td>
                        <td>00</td>
                        <td>User</td>


                        <td>
                            <a href="users/edit">Edit /</a>
                            <a href="users/delete">Delete</a>
                        </td>
                    </tr>



                </table>

            </div>
    </div>






<?php include("layout/beforePagination.php");?>
<?php include("layout/afterPagination.php");?>


