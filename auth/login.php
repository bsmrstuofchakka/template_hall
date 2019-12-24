<?php include ("../layout/beforeSearchMaster.php");?>
<?php include("../layout/searchMaster.php");?>
<?php include("../layout/afterSearchMaster.php");?>


<div class="col-lg-2 col-md-3 col-12 menu_block">



    <!--main menu -->
    <div class="side_menu_section">
        <ul class="menu_navCocoon">



            <li class="active">
                <a href="index.php">
                    Dashboard
                </a>
            </li>


            <!--
                <li>
                    if($userTable->userType==1)

                        <a href="{url('')}}">
                            Folder
                        </a>

                    endif
                </li>
                -->

        </ul>
    </div>
    <!--main menu end -->


</div>



            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">


                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>


                                        <span class="help-block">
                                        <strong></strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>


                                        <span class="help-block">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" > Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>





<?php include("../layout/beforePagination.php");?>
<?php include("../layout/afterPagination.php");?>


