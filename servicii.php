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

                            <li class="active"><a href="servicii.php"><i class="icon-medkit icon-large"></i>&nbsp;Servicii
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

							<li class="active"><a href="linkuri.php"><i class="icon-external-link"></i>&nbsp;Link-uri utile
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
                        <div class="alert alert-success"><i class="icon-medkit icon-large"></i>&nbsp;<strong>Servicii</strong></div>
                        <div class="hero-unit-2">
                               <form action="servicii.php" method="post">
							   <table class="table table-striped">
									 <thead>
                                <tr>
                                    <th>Denumire</th>
                                    <th>Pret</th>
									<th>Moneda</th>
                                    
                                </tr>
									</thead>
                            <tbody>
                          <?php 
                          	$sql="SELECT denumire, moneda, pret FROM serviciu"; 		
							$query=mysql_query($sql)or die(mysql_error());
							while($row=mysql_fetch_row($query))
							{
								
							?>
								<tr>
										
                                         <td><?php echo $row[0] ?></td>
                                         <td><?php echo $row[2] ?></td>
                                         <td><?php echo $row[1] ?></td>
                                      	
                                </tr>
							<?php
							} 
						 	?>
                            </tbody>	
								
								</table>
								</form>
                        </div>
                    </div>
                      
                </div>

            </div>

        </div>

        <div class="container">
            <div class="row-fluid">
                <div class="hero-unit-3">
                    <div class="alert alert-success"><i class="icon-bullhorn icon-large"></i>&nbsp;<strong>Cateva imagini cu serviciile oferite</strong></div>
                    <div class="hero-unit-2">
                        <ul class="thumbnails">  
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>

                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>                             
                        </ul>
                        <ul class="thumbnails">  
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>

                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>
                            <li class="span2">  
                                <div class="thumbnail">
                                    <img src="images/serviciu1.jpg" class="img-rounded">
                                </div>
                            </li>                             
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
       
    <?php include('footer.php'); ?>

</body>
</html>