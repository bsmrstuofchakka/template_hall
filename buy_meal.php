<?php include ("layout/beforeSearchMaster.php");?>
<?php include ("layout/searchMaster.php");?>





<?php include("layout/afterSearchMasterUserAdmin.php");?>

<link rel="stylesheet" href="public/sharing/assets/css/custom.css">





<div class="contentsection contemplete clear">
    <div class="maincontent clear" >
        <div style="text-align: center">
        <h2>Buy Meal Token</h2>
        </div>
        <br>
        <br>
        <!--to show meal buying successful message-->


            <div class="form-group">
                <label style="float: left">Morning Meal Quantity</label>
                <select name="morning_meal_quantity" class="form-control">
                    <option value="0">0</option>
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label style="float: left">Launch Meal Quantity</label>
                <select name="launch_meal_quantity" class="form-control">
                    <option value="0">0</option>
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label style="float: left">Diner Meal Quantity</label>
                <select name="dinner_meal_quantity" class="form-control">
                    <option value="0">0</option>
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

            </div>
            <div style="clear: left; text-align: center">
                <button type="submit" name="request_for_token" class="btn btn-primary">Request</button>
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


