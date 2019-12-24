<?php include ("layout/beforeSearchMaster.php");?>
<?php include ("layout/searchMaster.php");?>





<?php include("layout/afterSearchMasterUserAdmin.php");?>



<div class="features_area section_gap_change">


				<span class="contact100-form-title-1">
                    User Information
				</span>

        <div class="containerChange">



            <div class="wrap-contact100">




                    <input type="hidden" name="id" value="">

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Student Id:</span>
                    <input class="input100" type="text"  name="student_id"   value="" placeholder="Please, Enter Unique Student Id">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                        <span class="label-input100">Username:</span>
                        <input class="input100" type="text"  name="username"   value="" placeholder="Please,Enter Unique Username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Email:</span>
                        <input class="input100" type="email" name="email"  value="" placeholder="Please, Enter Unique email">
                        <span class="focus-input100"></span>
                    </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Password:</span>
                    <input class="input100" type="password" name="password"   placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Amount:</span>
                    <input class="input100" type="text"  name="amount"   value="" placeholder="Enter Amount">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">UserType:</span>
                    <select class="input100" type="text" name="userType"  >

                            <option value="0">User</option>
                            <option value="1">Admin</option>

                    </select>
                    <span class="focus-input100"></span>
                </div>


                <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn1">
						<span>
							Save
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                        </button>
                    </div>




            </div>


        </div>



    </div>





<?php include("layout/beforePagination.php");?>
<?php include("layout/afterPagination.php");?>


