<?php include ("layout/beforeSearchMaster.php");?>



<div class="social clear">
    <div class="searchbtn clear">

            <input type="text" name="search"   value="" placeholder="Search keyword..."/>
            <input type="submit" name="submit" value="Search"/>
    </div>
</div>


<?php include("layout/afterSearchMasterUserAdmin.php");?>









<div class="contentsection contemplete clear">
    <div class="maincontent clear">
        <div class="report">Report List</div>

        <div class="samepost clear">
            <h2><a href="#">Hall Problem</a></h2>

            <img width="100" src="public/sharing/images/post1.jpg"  alt="">

            <h6><a href="">Rahima Khatun   </a>  Asked: 6 Agust,2019   </h6>

            <ul id="menu">



                <li><a> .......</a>
                    <ul>
                        <li><a href="reports/delete">delete</a></li>

                    </ul>
                </li>

            </ul>

            <h1>  </h1>
            <div>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                </p>
            </div>
            <h5><a download="true" href="">---click Image/Pdf</a></h5>



            <div class="leftmore clear">

            </div>
            <div class="readmore clear">

            </div>
        </div>
        <div class="samepost clear">
            <h2><a href="#">Hall Problem</a></h2>

            <img width="100" src="public/sharing/images/post1.jpg"  alt="">

            <h6><a href="">Jalima   </a>  Asked: 6 Agust,2019   </h6>

            <ul id="menu">



                <li><a> .......</a>
                    <ul>
                        <li><a href="reports/delete">delete</a></li>

                    </ul>
                </li>

            </ul>

            <h1>  </h1>
            <div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.



                </p>
            </div>
            <h5><a download="true" href="">---click Image/Pdf</a></h5>



            <div class="leftmore clear">

            </div>
            <div class="readmore clear">

            </div>
        </div>
        <div class="samepost clear">
            <h2><a href="#">Hall Problem</a></h2>

            <img width="100" src="public/sharing/images/post1.jpg"  alt="">

            <h6><a href="">Sakira Khatun   </a>  Asked: 19 September,2019   </h6>

            <ul id="menu">



                <li><a> .......</a>
                    <ul>
                        <li><a href="reports/delete">delete</a></li>

                    </ul>
                </li>

            </ul>

            <h1>  </h1>
            <div>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour

                </p>
            </div>
            <h5><a download="true" href="">---click Image/Pdf</a></h5>



            <div class="leftmore clear">

            </div>
            <div class="readmore clear">

            </div>
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


