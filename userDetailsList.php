<?php include ("layout/beforeSearchMaster.php");?>



<div class="social clear">
    <div class="searchbtn clear">

        <input type="text" name="search"   value="" placeholder="Search keyword..."/>
        <input type="submit" name="submit" value="Search"/>
    </div>
</div>


<?php include("layout/afterSearchMasterUserAdmin.php");?>



<link href="public/userDetails/css/style.css" rel="stylesheet" type="text/css" />





<div class="features_area section_gap_change">

                    <span class="contact100-form-title-1">
                       User Details List
                    </span>

        <div class="containerChange">

            <div class="col-12Change2">
                <a class="primary-btn text-uppercase"  href="userDetailsAddEdit.php">Add User Details</a>
            </div>

            <div class="col-12Change1">
                <a class="primary-btn text-uppercase"  href="userList.php">User List</a>
            </div>
                <div class="table-scrollable" >
                <table class="responstable" id="sample_1">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Address</th>
                        <th>Department</th>
                        <th>Degree</th>
                        <th>Contact Number</th>
                        <th>Room No.</th>
                        <th>Block</th>
                        <th>Boarder Type</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
                        <th>Religion</th>
                        <th>District</th>
                        <th>Blood Group</th>
                        <th>Photo</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>



                        <tr>
                            <th>1</th>
                            <th>201512010</th>
                            <th>Md. Rahim Khan</th>
                            <th>Saleh Ahmed</th>
                            <th>Saleha Khatun</th>
                            <th>Gopalganj Sador</th>
                            <th>CSE</th>
                            <th>Bsc</th>
                            <th>0189299</th>
                            <th>302</th>
                            <th>B</th>
                            <th>R</th>
                            <th>09/12/19</th>
                            <th>Male</th>
                            <th>Islam</th>
                            <th>Gopalganj</th>
                            <th>B+</th>
                            <th>
                                    <img width="100" src="public/sharing/images/post1.jpg"  alt="">

                            </th>

                            <th>
                                <a href="userDetails/edit">Edit /</a>
                                <a href="userDetails/delete">Delete</a>
                            </th>
                        </tr>
                    <tr>
                        <th>1</th>
                        <th>201512010</th>
                        <th>Md. Rahim Khan</th>
                        <th>Saleh Ahmed</th>
                        <th>Saleha Khatun</th>
                        <th>Gopalganj Sador</th>
                        <th>CSE</th>
                        <th>Bsc</th>
                        <th>0189299</th>
                        <th>302</th>
                        <th>B</th>
                        <th>R</th>
                        <th>09/12/19</th>
                        <th>Male</th>
                        <th>Islam</th>
                        <th>Gopalganj</th>
                        <th>B+</th>
                        <th>
                            <img width="100" src="public/sharing/images/post1.jpg"  alt="">

                        </th>

                        <th>
                            <a href="userDetails/edit">Edit /</a>
                            <a href="userDetails/delete">Delete</a>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>201512010</th>
                        <th>Md. Rahim Khan</th>
                        <th>Saleh Ahmed</th>
                        <th>Saleha Khatun</th>
                        <th>Gopalganj Sador</th>
                        <th>CSE</th>
                        <th>Bsc</th>
                        <th>0189299</th>
                        <th>302</th>
                        <th>B</th>
                        <th>R</th>
                        <th>09/12/19</th>
                        <th>Male</th>
                        <th>Islam</th>
                        <th>Gopalganj</th>
                        <th>B+</th>
                        <th>
                            <img width="100" src="public/sharing/images/post1.jpg"  alt="">

                        </th>

                        <th>
                            <a href="userDetails/edit">Edit /</a>
                            <a href="userDetails/delete">Delete</a>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>201512010</th>
                        <th>Md. Rahim Khan</th>
                        <th>Saleh Ahmed</th>
                        <th>Saleha Khatun</th>
                        <th>Gopalganj Sador</th>
                        <th>CSE</th>
                        <th>Bsc</th>
                        <th>0189299</th>
                        <th>302</th>
                        <th>B</th>
                        <th>R</th>
                        <th>09/12/19</th>
                        <th>Male</th>
                        <th>Islam</th>
                        <th>Gopalganj</th>
                        <th>B+</th>
                        <th>
                            <img width="100" src="public/sharing/images/post1.jpg"  alt="">

                        </th>

                        <th>
                            <a href="userDetails/edit">Edit /</a>
                            <a href="userDetails/delete">Delete</a>
                        </th>
                    </tr>


                </table>
            </div>
            </div>
</div>




<?php include("layout/beforePagination.php");?>
<?php include("layout/afterPagination.php");?>


