<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="nav-collapse collapse">
                        <i class="icon-facebook-sign icon-large" id="color_white"></i>
                        <i class="icon-twitter icon-large" id="color_white"></i>
                        <i class="icon-google-plus icon-large" id="color_white"></i>
                        <i class="icon-github-alt icon-large" id="color_white"></i>
                        <i class="icon-linkedin-sign icon-large" id="color_white"></i>
                    </div>

                </div>
            </div>
        </div>

        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span10">
                                <img src="images/head11.jpg">
                            </div>
                            <div class="span2">
                                <div class="pull-right">
                                    <!--- login button -->
                                    <?php if(!isset($_SESSION['s_cod'])) { ?>						
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#admin_modal" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Admin</a></li>
                                            <li><a href="#operator_modal" role="button"  data-toggle="modal"><i class="icon-android icon-large"></i>&nbsp;Operator</a></li>
                                            <li><a href="#medic_modal" role="button"  data-toggle="modal"><i class="icon-user-md icon-large"></i>&nbsp;Medic</a></li>
                                            <li><a href="#pacient_modal" role="button"  data-toggle="modal"><i class="icon-male icon-large"></i>&nbsp;Pacient</a></li>
                                        </ul>
                                    </div>
                                    <?php 
                                        include('admin_modal.php'); 
                                        include('operator_modal.php');
                                        include('medic_modal.php');
                                        include('pacient_modal.php');
                                    }
                                    else {
                                        
                                    ?>
                                       
                                    <div class="btn-group">
                                        <button class="btn btn-success">
                                        <?php 
                                            if($_SESSION['s_rol']=='a') echo '<i class="icon-large icon-user"></i>&nbsp;';
                                            if($_SESSION['s_rol']=='o') echo '<i class="icon-large icon-android"></i>&nbsp;';
                                            if($_SESSION['s_rol']=='m') echo '<i class="icon-large icon-user-md"></i>&nbsp;';
                                            if($_SESSION['s_rol']=='p')  echo '<i class="icon-large icon-male"></i>&nbsp;';
                                    
                                            echo $_SESSION['s_nume_user'];
                                        ?>
                                        </button>
                                        
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>

                                        <ul class="dropdown-menu">
                                            <li><a href="#logout" role="button"  data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                                        </ul>

                                    </div>

                                    <?php 
                                        include('logout_modal.php');
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>