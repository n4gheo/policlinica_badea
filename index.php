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
                            <li class="active"><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
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

                            <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>
							
							<li><a href="linkuri.php"><i class="icon-external-link"></i>&nbsp;Link-uri utile
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
                        <div class="alert alert-success"><i class="icon-stethoscope icon-large"></i>&nbsp;<strong>Misunea Medclinic</strong></div>
                            <div class="hero-unit-2">
                                <p>Aplicatia medclinic doreste eficientizarea operationala a actului medical prin:</p>
                                <ul>
                                    <li>îmbunătăţirea fluxului de lucru din clinica medicală;</li>
                                    <li>gestionarea unui volum mare de informaţii medicale despre pacienţi;</li>
                                    <li>eliminarea dosarelor fizice în interiorul instituţiei;</li>
                                    <li>disponibilitatea informatiilor, în timp real, personalului medical;</li>
                                    <li>sporirea securitatii informaţiei.</li>
                                </ul>
                            </div>
                    </div>
                    
                    <div class="hero-unit-3">
                        <div class="alert alert-success"><i class="icon-medkit icon-large"></i>&nbsp;<strong>Medclinic</strong></div>
                            <div id="myCarousel" class="carousel slide">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                    <div class="active item">
                                        <img src="images/head6.jpg" alt="head9.jpg" />
                                        <div class="carousel-caption">
                                            <p>text1</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/head7.jpg" alt="head10.jpg" />
                                        <div class="carousel-caption">
                                            <p>text3</p>
                                        </div>                                        
                                    </div>
									<div class="item">
                                    <img src="images/head5.jpg" alt="head8.jpg" />
                                        <div class="carousel-caption">
                                            <p>text3</p>
                                        </div> 
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

        <div class="container">
            <div class="row-fluid">
                <div class="hero-unit-3">
                    <div class="alert alert-success"><i class="icon-bullhorn icon-large"></i>&nbsp;<strong>Prezenatere MEDCLINIC</strong></div>
                    <div class="hero-unit-2">
                       <p>Constienti ca sanatatea nu este totul, dar totul fara sanatate nu inseamna nimic, noi avem o viziune sanogena asupra existentei umane si promovam o cultura pentru sanatate. Oferim oricarei persoane, indiferent de varsta si ocupatie, examene clinice generale si de specialitate, investigatii de laborator generale si specifice in scopul prevenirii afectiunilor, promovarii sanatatii, stabilirii diagnosticului etiologic, stabilirii atitudinii terapeutice adecvate.</p>
                       <p>Finalitatea serviciilor medicale oferite de clinica noastra este rezolvarea problemelor medicale ale pacientului pana la disparitia lor completa, oferirea unui maximum de confort pacientului pentru imbunatatirea calitatii vietii prin stabilirea cu acuratete a diagnosticului precoce si a unui tratament cat mai specific.</p>  
                       <p>Centrul promoveaza o noua cultura pentru sanatate, bazata pe mentinerea sanatatii si preventia bolii, stabilirea unui diagnostic precoce si initierea unei terapii individualizate, aplicarea de protocoale specifice de recuperare medicala.</p>
                       <p>"Pentru noi, pacientul nu inseamna numai durerea, rana, infectia, un rezultat nefavorabil la o analiza, ci chiar el, omul, cu nelinisti, tristeti, uneori spaime, pe care avem posibilitatea sa il ajutam, constienti ca sanatatea nu este totul, dar totul fara sanatate nu inseamna nimic".</p>
                       <p>In cadrul Clinicii medicale Medclinic sunt furnizate consulturi de specialitate in ambulatoriu, servicii spitalicesti, servicii de recuperare medicala, adaptate patologiei pacientului.</p>
                    </div>
                </div>
            </div>
        </div> 
       
    <?php include('footer.php'); ?>

</body>
</html>