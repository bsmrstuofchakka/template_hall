<ul class="header-account dropdown default-dropdown" xmlns:color="http://www.w3.org/1999/xhtml.php">

 <!--   @if (Auth::guest())
        <div class="login.php"><a href="login.php"> <span>Login <i class="icon-calendar3.php"></i></span></a>
            /<a href="register.php"> <span>Join <i class="icon-calendar3.php"></i></span></a>
        </div>
    @else
    -->
        <div class="login" role="button" data-toggle="dropdown" aria-expanded="true">

            <strong class="text-lowercase">Jonh </strong>
        </div>


        <ul class="custom-menu">
            <li><a href=""><i class="fa fa-unlock-alt"></i> Logout</a></li>
        </ul>
   
</ul>
<!-- /Account -->








</div>

<div class="row justify-content-colter">
    <div class="col-lg-2 col-md-3 col-12 menu_block">



        <!--main menu -->
        <div class="side_menu_section">
            <ul class="menu_navCocoon">

                <li class="active" >
                    <a  href="welcomeUserAdmin.php">
                        Dashboard
                    </a>
                </li>
            
                <li  >
                    <a  href="reportAddEdit.php">
                        Report
                    </a>
                </li>
           
                <li>

                    <a href="profile.php">
                        Profiles
                    </a>
                </li>
                <li>

                    <a href="passwordChange.php">
                        Password Change
                    </a>
                </li>
            
                <li>


                        <a href="reportList.php">
                            ReportList
                        </a>


                </li>
               

                <li>


                    <a href="userlist.php">
                        UsersList
                    </a>


                </li>
             


               
                <li>

                        <a href="set_token_date.php">
                            Token List
                        </a>
                </li>
               
                    
                    <li>
                        <a href="update_meal_cost.php">
                            Update Meal Cost
                        </a>
                    </li>
                   
                    

                   
                   
                    <li>
                    <!--Ashish Meal option-->
                        <a href="buy_meal.php">
                            Buy Meal Token
                        </a>
                    </li>
                   

                

                <!--    <li>
                        if($userTable->userType==1)

                            <a href="url('.php">
                                UsersList
                            </a>

                        endif
                    </li>
                    <li>
                        if($userTable->userType==1)

                            <a href="{url('.php">
                                Folder
                            </a>

                        endif
                    </li>
                    -->

            </ul>
        </div>
        <!--main menu end -->


    </div>
    <script>

        $('.li').on('click','li', function(){
            $(this).addClass('active').siblings().removeClass('active');
        });
    </script>