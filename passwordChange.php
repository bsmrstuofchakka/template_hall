<?php include ("layout/beforeSearchMaster.php");?>
<?php include("layout/searchMaster.php");?>
<?php include("layout/afterSearchMasterUserAdmin.php");?>




    <div class="features_area section_gap_change">


				<span class="contact100-form-title-1">
					Change Password
				</span>
		<div class="containerChange">




            <div class="wrap-contact100">


                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Current Password:</span>
                    <input class="input100" type="password"  name="current_password"   placeholder="Enter Current password" required>
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input">
                    <span class="label-input100">New Password:</span>
                    <input class="input100" type="password"  name="new_password" pattern=".{8,}"   placeholder="Enter new minimum 8 password" required>
                    <span class="focus-input100"></span>
                </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Confirm Password:</span>
                        <input class="input100" type="password"  name="new_confirm_password" pattern=".{8,}"   placeholder="Enter confirm minimum 8 password" required>
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




