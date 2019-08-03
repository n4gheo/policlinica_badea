<?php
    include('header.php');
?>
<body>

    <?php include('navhead.php'); ?>

        <div class="container">
            <div class="row-fluid">
                
                <div class="span3">

                    <div class="hero-unit-3">
                        <div class="alert-index alert-success">
                            <i class="icon-calendar icon-large"></i>
                            <?php
                            $Today = date('y:m:d');
                            $new = date('d F Y', strtotime($Today));
                            echo $new;
                            ?>
                        </div>
                    </div>

                    <div class="hero-unit-1">
                        <ul class="nav  nav-pills nav-stacked">


                            <li class="nav-header">Links</li>
                            <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>

                            <li><a href="servicii.php"><i class="icon-medkit icon-large"></i>&nbsp;Servicii
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>

                            <li><a href="noutatimedicale.php"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Noutati medicale
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>

                            <li class="active"><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>
							
							<li ><a href="linkuri.php"><i class="icon-external-link"></i>&nbsp;Link-uri utile
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>

                            <li><a  href="#prezentareaplicatie" role="button" data-toggle="modal"><i class="icon-sitemap icon-large"></i>&nbsp;Prezentare aplicatie
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>

                            <li class="nav-header">Tipuri de utilizatori</li>

                            <li><a  href="#admin" role="button" data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Administrator
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>
                            <li><a href="#operator" role="button" data-toggle="modal"><i class="icon-android icon-large"></i>&nbsp;Operator
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>
                            <li><a href="#medic" role="button" data-toggle="modal"><i class="icon-user-md icon-large"></i>&nbsp;Medic
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>
                            <li><a href="#pacient" role="button" data-toggle="modal"><i class="icon-male icon-large"></i>&nbsp;Pacient
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>                        
                        </ul>
                    </div>
                    <br>
                </div>

                <div class="span9">
                    <div class="hero-unit-3">
                        <div class="alert alert-success"><i class="icon-envelope-alt icon-large"></i>&nbsp;<strong>Contact</strong></div>
                            <div class="hero-unit-2">
                                <p> Ne puteti contacta :</p>
                                <p> Tel:</p>
                                <p> Email: </p>
                            
                            </div>
                    </div>
                    
                    <div class="hero-unit-3">
                        <div class="alert alert-success"><i class="icon-medkit icon-large"></i>&nbsp;<strong>Medclinic</strong></div>
                            <div id="myCarousel" class="carousel slide">
                                   <!-- Carousel items -->
                                    <div class="carousel-inner">
                                    <div class="active item">
                                        <img src="images/head6.jpg" alt="head9.jpg" />
                                    </div>
                                    <div class="item">
                                    <img src="images/head7.jpg" alt="head10.jpg" />
                                    </div>
									<div class="item">
                                    <img src="images/head5.jpg" alt="head8.jpg" />
                                    </div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                            </div>
                        </div>
                    </div>                    
                </div>

            </div>

        </div>
       
    <?php include('footer.php'); ?>

</body>
</html>