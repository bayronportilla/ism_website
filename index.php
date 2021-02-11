<!DOCTYPE html>
<html lang="en">

<?php
	include 'php/members.php';
	include 'php/papers.php';
?>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kapteyn ISM (Interstellar Medium) Group</title>
    <link rel="shortcut icon" href="images/favicon.ico">
	
	<!-- ISM Custom CSS -->
	<link href="css/ism_custom.css" rel="stylesheet">
	
    <!-- Bootstrap Core CSS --> 
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" >
    <link rel="stylesheet" href="css/owl.theme.css" >
    <link rel="stylesheet" href="css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>

    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    
    
    <!-- Styleswitcher
================================================== -->

        <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>        
                <ul class="colors-list">
                    <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>
                    <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>
                    <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>
                    <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>
                    
                    <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>
                    <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>
                    
                </ul>

        </div>  

<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Kapteyn ISM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#feature">Research Fields</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#about-us">Members</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#latest-news">Latest Publications</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
    
    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">


            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/header-bg-1.jpeg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span><strong>Welcome to</strong> Kapteyn ISM Group</span>
                            </h1>
                            <p class="animated2">Insterstellar Medium (ISM) Group at the Kapteyn Astronomical Institute <br> University of Groningen, The Netherlands <br> The group is led by <span><strong>Floris van der Tak</strong></span> and <span><strong>Inga Kamp</strong></span></p>	
                            <a href="#feature" class="page-scroll btn btn-primary animated1">Read More</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->


        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    
<!-- Styleswitcher  for logos go to: http://www.flaticon.com/free-icons/astronomy_34870/7
================================================== -->
    <!-- Start Feature Section -->
        <section id="feature" class="feature-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            
                            <div class="feature-content">
								<img src = "images/logos/ism.png" alt = "saturn" />
                                <h4>Interstellar Medium</h4>
                                <p>Interstellar medium both in the Milky Way and other galaxies</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                       
                            <div class="feature-content">
								<img src = "images/logos/night.png" alt = "saturn" />
                                <h4>Star Formation</h4>
                                <p>Low and Massive Star Formation in the Galaxy and star formation activity</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            
                            <div class="feature-content">
								<img src = "images/logos/disk.png" alt = "saturn" />
                                <h4>Disks in Star Forming Regions</h4>
                                <p>Disk formation and their chemical and physical evolution in star forming regions</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                           
                            <div class="feature-content">
								<img src = "images/logos/comet.png" alt = "saturn" />
                                <h4>Asteroids</h4>
                                <p>The formation of asteroids and their role in space and life</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                           
                            <div class="feature-content">
								<img src = "images/logos/disk.png" alt = "saturn" />
                                <h4>Planet and Satellite Formation</h4>
                                <p>The formation of planets and their moons using numerical models and observations</p>
                            </div>
                        </div>
                    </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                           
                            <div class="feature-content">
								<img src = "images/logos/instrumentation.png" alt = "saturn" width="81" height="81" class="img-rounded" />
                                <h4>Receivers</h4>
                                <p>Bolometers and Heterodyne receivers with the collaboration of SRON</p>
                            </div>
                        </div>
                    </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">

                            <div class="feature-content">
                                    <img src = "images/logos/planet.png" alt = "saturn" />
                                    <h4>Exoplanets and Astrobiology</h4>
                                    <p>The atmosphere of exoplanets and life in space</p>
                            </div>
                        </div>
                    </div>

					
            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->
    
    
    <!-- Start About Us Section -->
    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>About Us</h3>
                            <p>ISM Group Members at Kapteyn Astronomical Institute and <br /> SRON - Netherlands Institute for Space Research <br /></p>
                        </div>
                </div>
            </div>
            <div class="row">
                
				<?php get_members(); ?>
                                
            </div><!-- /.row -->            
            
        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -- >  

    <!-- Start Visitors Section -->
    <section id="team" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h1>Projects</h1>
                            <p>  </p>
                        </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/team/dianaproject.png" class="img-responsive" alt="..">
                        <h4>DIANA Project</h4>
                        <div class="border"></div>
                        <p> DIANA is an European Framework Seven (FP7) project, SPACE-2011 collaboration, project no 284405, which conducts a
                            systematic collection and coherent analysis of observational data from the birth-places of extrasolar planets, the
                            so-called protoplanetary discs. DIANA stands for DIscANAlysis. </p>
                        <p> <a href="http://dianaproject.wp.st-andrews.ac.uk/" target="_blank">Project Website</a> </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/team/safari_spica.jpg" class="img-responsive" alt="..">
                        <h4>SAFARI/SPICA Project</h4>
                        <div class="border"></div>
                        <p> SPICA is a joint European-Japanese project under phase-A study at ESA: an infrared space
                            observatory with a large, cryogenically cooled telescope. One of the instruments on board
                            is SAFARI, a far-IR spectrometer providing instantaneously wavelength coverage of the 34
                            to 230 micron domain. One of the core objectives of this mission is to trace the gas, dust and
                            ice evolution in planetary systems. </p>
                        <p> <a href="https://www.sron.nl/missions-astrophysics/spica-safari">Project Website</a> </p>
                    </div>
                </div>
                

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/team/Chameleon.jpg" class="img-responsive" alt="..">
                        <h4>ITN CHAMELEON</h4>
                        <div class="border"></div>
			<p>  In the CHAMELEON Marie-Curie Innovative Training Network (MC-ITN), we focus on the 
			development of Virtual Laboratories which will be the crucial tool to analyse in detail current 
			and future disk and exoplanet observations. Our goals are to retrieve and predict the chemical 
			composition of planet-forming disks and exoplanet atmospheres using such Virtual Laboratories. 
			We plan to achieve knowledge transfer between planet and disk community by the exchange of 
			state-of-the-art codes developing models and to train our researchers in complex modelling and 
			big-data interpretation. We will use the fascination for exoplanets and their birthplaces to 
			promote science in the society, in local and wider communities.</p>
                        <p> <a href="https://chameleon.wp.st-andrews.ac.uk/">Project Website</a> </p>
                    </div>
                </div>

		<div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="http://www.olife-programme.eu/wp-content/uploads/2019/03/olife-logo-retina.png" class="img-responsive" alt="..">
                        <h4>oLife</h4>
                        <div class="border"></div>
                        <p> A joint initiative by seven world-leading research institutes of three universities in 
			The Netherlands. Supported by funding from the Horizon 2020 Framework Programme of the European
			 Union, we offer 18 post-doctoral fellowships for interdisciplinary research on fundamental 
			questions concerning the origin and evolution of life, and its distribution in the universe. </p>
                        <p> <a href="http://www.olife-programme.eu">Project Website</a> </p>
                    </div>
                </div>



            </div><!-- /.row -->            
            
        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -- > 

    
    <!-- Start Latest News Section -->
    <section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Latest Publications</h3>
                        <p>The papers which have been published by ISM Group Members</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
					<?php get_papers(True, 6); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->


    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact</h3>
                        <p>Please indicate 'Question for ISM Group' in subject of your mail</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                            <li><strong>Adress :</strong> Landleven 12, 9747 AD, Groningen</li>
                            <li><strong>Phone :</strong> +31 (0)50 - 36 34073 </li>
                            <li><strong>Fax :</strong> +31 (0)50 - 36 36100 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Mails are checked:</h4>
                        <ul>
                            <li><strong>Mon-Wed :</strong> 01:00 PM to 14:00 pm</li>
                            <li><strong>Thurs-Fri :</strong> 02:00 pm to 02:30 pm</li>
                            <li><strong>Sat :</strong> Closed</li>
                            <li><strong>Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="http://guardiantheme.com">Kapteyn ISM Group</a> 2020</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>

</body>

</html>
