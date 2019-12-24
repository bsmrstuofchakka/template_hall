<?php include ("layout/beforeSearchMaster.php");?>
<?php include ("layout/searchMaster.php");?>





<?php include("layout/afterSearchMasterUserAdmin.php");?>

<div class="features_area section_gap_change">


				<span class="contact100-form-title-1">
                    User Details List
				</span>

        <div class="containerChange">



            <div class="wrap-contact100">



                    <input type="hidden" name="id" value="">

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Student ID:</span>
                    <input class="input100" type="text" name="pstudent_id" value="" placeholder="Enter student id" required>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Name:</span>
                    <input class="input100" type="text" name="name" value="" placeholder="Enter name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Father Name:</span>
                    <input class="input100" type="text" name="fname" value="" placeholder="Enter father name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Mother Name:</span>
                    <input class="input100" type="text" name="mname" value="" placeholder="Enter mother name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Address:</span>
                    <input class="input100" type="text" name="address" value="" placeholder="Enter address">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Department:</span>
                    <input class="input100" type="text" name="department" value="" placeholder="Enter department">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Degree:</span>
                    <input class="input100" type="text" name="degree" value="" placeholder="Enter degree">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Contact Number:</span>
                    <input class="input100" type="text" name="cnumber" value="" placeholder="Enter contact number">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Room No:</span>
                    <input class="input100" type="text" name="roomno" value="" placeholder="Enter room no" required>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Block:</span>
                    <input class="input100" type="text" name="block" value="" placeholder="Enter block">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Boarder Type:</span>
                    <input class="input100" type="text" name="btype" value="" placeholder="Enter boarder type">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Birth Date:</span>
                    <input class="input100 date" type="text" data-date-format="yyyy-mm-dd" name="birth_date" value="" placeholder="Enter birth date">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Gender:</span>
                    <input class="input100" type="text" name="gender" value="" placeholder="Enter gender">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Religion:</span>
                    <input class="input100" type="text" name="religion" value="" placeholder="Enter religion">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Districts:</span>
                    <input class="input100" type="text" name="districts" value="" placeholder="Enter districts">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Blood Group:</span>
                    <input class="input100" type="text" name="blood_group" value="" placeholder="Enter blood group">
                    <span class="focus-input100"></span>
                </div>



                <!-- $contents = pathinfo(storage_path().'/zOEh8zefUuHmOhlLY80UNNneTO5tJmv1ECfrwOpF.png');
                // img width="100px" src="asset('admin/uploads/'.$flower-image)}}

                //  dd( $contents['extension']);
                -->
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Photo:</span>
                    <input class="input100" type="file" name="photo"  placeholder="Enter photo">

                        <img width="80" src=""  alt="">

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




<script src="{{asset('https://code.jquery.com/jquery-1.12.4.js')}}"></script>
<script src="{{asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js')}}"></script>
<script>
    $( function() {
        $('.date').datepicker();
    });
</script>