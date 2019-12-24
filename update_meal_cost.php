

<?php include ("layout/beforeSearchMaster.php");?>
<?php include ("layout/searchMaster.php");?>





<?php include("layout/afterSearchMasterUserAdmin.php");?>





<div class="contentsection contemplete clear">
    <div class="maincontent clear" >
        <div style="text-align: center; ">
            <h2>Update Meal Cost</h2>
        </div>
        <br>
        <br>
        <!--to show meal buying successful message-->

        <div class="form-group" style="text-align: left">
            <label>Morning Meal Cost</label>
            <input class="form-control"  style="text-align: left; " type="text" name="morning_meal_cost" value="15">

        </div>
        <div class="form-group" style="text-align: left">
            <label>Launch Meal Cost</label>
            <input class="form-control" style="text-align: left; " type="text" name="launch_meal_cost" value="25">
        </div>
        <div class="form-group" style="text-align: left" >
            <label>Dinner Meal Cost</label>
            <input class="form-control" style="text-align: left; " type="text" name="dinner_meal_cost" value="25">

        </div>
        <div   style="text-align: left; ">
            <button type="submit"  name="update_meal_cost" class="btn btn-primary">Update Cost</button>
        </div>

    </div>


</div>














<script>
    $('#sample_1').DataTable({
        "iDisplayLength": 10,
        "aLengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "all"]
        ]
    });

    $(document).ready(function(){
        $('.form-horizontal').on('submit', function(e){
            $(this).css('opacity', '0.5');
            $('.submit').attr('disabled', true);
            $('#loader').removeClass('hide');
        });
    });


</script>
<?php include("layout/beforePagination.php");?>
<?php include("layout/afterPagination.php");?>


