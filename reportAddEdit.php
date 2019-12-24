

<?php include ("layout/beforeSearchMaster.php");?>
<?php include("layout/searchMaster.php");?>
<?php include("layout/afterSearchMasterUserAdmin.php");?>





<div class="features_area section_gap_change">


				<span class="contact100-form-title-1">
                    Add Report
				</span>

        <div class="containerChange">



            <div class="wrap-contact100">




                    <input type="hidden" name="id" value="">


                <div class="wrap-input100 validate-input">
                        <span class="label-input100">Title:</span>
                        <input class="input100" type="text"  name="rtitle"  value=""   placeholder="Enter Title" >
                        <span class="focus-input100"></span>
                    </div>





                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Content:</span>
                    <textarea class="input100" type="text"  name="rcontent"     placeholder="Enter Report">


                    </textarea>
                </div>


                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Upload File:</span>
                    <input class="input100" type="file"  name="rfile"  value="File"    placeholder="Enter Files ">
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

