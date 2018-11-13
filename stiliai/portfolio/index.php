<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/alspok/mm/stiliai/portfolio/portf.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <?php header_info(); ?>
        <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/skel-noscript.css" />
		<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style.css" />
		<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style-desktop.css" />
    </head>
    <body>

    <div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="<?php echo adresas(); ?>"><?php echo $conf['Pavadinimas']; ?></a></h1>
					<span><?php echo $conf['Apie']; ?></span>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<!-- <li class="active"><a href="index.html">Homepage</a></li>
						<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li> -->
						<?php
                            $limit = 6; //Kiek nuorodų rodome
                            $menuSql  = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "page` WHERE `parent` = 0 AND `show` = 'Y' AND `lang` = " . escape(lang()) . " ORDER BY `place` ASC LIMIT " . $limit );
                        ?>
                        <?php foreach ($menuSql as $menuRow) { ?>
                            <?php if (teises( $menuRow['teises'], $_SESSION[SLAPTAS]['level'])){ ?>
                                <li>
                                    <a href="<?php echo url('?id,' . (int)$menuRow['id']); ?>">
                                        <?php echo input($menuRow['pavadinimas']); ?>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php } ?>
					</ul>
				</nav>
			</div>
		</div>


    <div id="main">
			<div class="container">
				<div class="row"> 
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<?php
                            if ( isset( $strError ) && !empty( $strError ) ) {
                                klaida( "Klaida", $strError );
                            }

                            include("priedai/centro_blokai.php");
                            include($page . ".php");
                        	?>
						</section>
					</div>
                        <?php
                            include("priedai/desines_blokai.php");
                            include("priedai/kaires_blokai.php");
                        ?>
                		</div>
					</div>
				</div>
			</div>
		</div>

    
    <a id='section1'></a>
        <section class='section1'>
            <div class='container-fluid w3-container' style='padding-bottom: 30%'>
                <div class='row justify-content-md-center' style='position: sticky; top: 15px'>
                    <div class='col'>
                        <div class='w3-dropdown-hover' style='position: fixed'>
                            <!-- <button class="w3-btn w3-red">Hover Me!</button> -->
                            <img src='/alspok/mm/stiliai/portfolio/burgericon.png' style='width: 30px; border-radius: 30%'>
                            <div class='w3-dropdown-content w3-border' style='padding-left: 15px; color: white; background-color: #1D809F; min-width: 180px; font-size: 10px'>
                                <p><a href="#section1">Home</a></p>
                                <p><a href="#section2">What we offer</a></p>
                                <p><a href='#section3'>Services</a></p>
                                <p><a href='#section4'>Our next web site</a></p>
                                <p><a href='#section5'>Resent projects</a></p>
                                <p><a href='#section6'>Imposible to resist...</a></p>
                                <p><a href='#section7'>Location</a></p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>   
            <div class='container-fluid'>
                <div class='row justify-content-md-center'>
                    <div class='col-md-4 col-md-auto'></div>
                    <div class='col-md-4 col-md-auto flex'><h1>Stylish Portfolio</h1></div>
                    <div class='col-md-4 col-md-auto'></div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-2 col-md-auto'></div>
                    <div class='col-md-8 col-md-auto flex'>
                        <h4>A Free Bootstrap Theme by Start Bootstrap</h4>
                    </div>
                    <div class='col-md-2 col-md-auto'></div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-4 col-md-auto'></div>
                    <div class='col-md-4 col-md-auto flex height-120'><button class='blue-button'>Find Out More</button></div>
                    <div class='col-md-4 col-md-auto'></div>
                </div>
            </div>
        </section>
        
        

        <a id='section2'></a>
        <section class='section2 flex height-400'>
            <div class='container-fluid'>
                <div class='row justify-content-md-center'>
                    <div class='col-md-1 col-md-auto'></div>
                    <div class='col-md-10 col-md-auto flex'>
                        <h3>Stylish Portfolio is the perfact theme for your nest project!</h3>
                    </div>
                    <div class='col-md-1 col-md-auto'></div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-1 col-md-auto'></div>
                    <div class='col-md-10 col-md-auto flex'>
                        <h6>This theme features a flexable, UX friendly sidebar menu and stock photos from our friends at Unsplash!</h6>
                    </div>
                    <div class='col-md-1 col-md-auto'></div>
                    </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-4 col-md-auto'></div>
                    <div class='col-md-4 col-md-auto flex height-120'><button class='black-button'>What we offer</button></div>
                    <div class='col-md-4 col-md-auto'></div>
                </div>
            </div>
        </section>

        <a id='section3'></a>
        <section class='section3 flex height-400'>
            <div class='container-fluid'>
                <div class='row justify-content-md-center'>
                    <div class='col-md-auto' style='color: #ebeb7e'><h5>Services</div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-auto'><h1>What we offer</h1></div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-3 col-md-auto height-150 flex offer-icons'><i class="fas fa-mobile-alt"></i></div>
                    <div class='col-md-3 col-md-auto height-150 flex offer-icons'><i class="fas fa-pen"></i></div>
                    <div class='col-md-3 col-md-auto height-150 flex offer-icons'><i class="fas fa-thumbs-up"></i></div>
                    <div class='col-md-3 col-md-auto height-150 flex offer-icons'><i class="fas fa-question"></i></div>
                </div>
                <div class='row justify-content-md-center font-16-white'>
                        <div class='col-md-3 col-md-auto height-30 flex'>Responsive</div>
                        <div class='col-md-3 col-md-auto height-30 flex'>Redesigned</div>
                        <div class='col-md-3 col-md-auto height-30 flex'>Favorited</div>
                        <div class='col-md-3 col-md-auto height-30 flex'>Questions</div>                    
                </div>
                <div class='row justify-content-md-center font-12-white'>
                        <div class='col-md-3 col-md-auto height-30 flex'>Looks greate on any screen size.</div>
                        <div class='col-md-3 col-md-auto height-30 flex'>Freshly redesignet on Bootstrap4.</div>
                        <div class='col-md-3 col-md-auto height-30 flex'>Milions of users started Bootstrap.</div>
                        <div class='col-md-3 col-md-auto height-30 flex'>Answer your questions...</div>                    
                </div>
            </div>
        </section>

        <a id='section4'></a>
        <section class='section4 flex'>
            <div class='container-fluid'>
                <div class='row justify-content-md-center'>
                    <div class='col-md-4'></div>
                    <div class='col-md-4 flex'>
                        <h1 class='h-wrap'>Welcome to Our next website</h1>
                    </div>
                    <div class='col-md-4'></div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-4 height-120 flex'><button class='blue-button'>Download Now!</button></div>
                </div>
            </div>
        </div>
        </section>

        <a id='section5'></a>
        <section class='section5 flex'>
            <div class='container-fluid'>
                <div class='row justify-content-md-center'>
                        <div class='col-md-4'></div>
                        <div class='col-md-4 flex height-50' style='color: #d6d65b'><h3>Portfolio</h3></div>
                        <div class='col-md-4'></div>
                </div>
                <div class='row justify-content-md-center'>
                        <div class='col-md-4'></div>
                        <div class='col-md-4 flex'><h1>Resent Projects</h1></div>
                        <div class='col-md-4'></div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-6 height-400 grid-text' style="background-image: url('/alspok/mm/stiliai/portfolio/portfolio-1.jpg')">
                        <div><b>STATIONARY</b><p>A yellow pencil with envelops on a clean, blue backdrop!</p></div>
                    </div>
                    <div class='col-md-6 height-400 grid-text' style="background-image: url('/alspok/mm/stiliai/portfolio/portfolio-2.jpg')">
                        <div><b>ICECREAME</b><p>A dark blue background with a colored pencil, a clip and a tiny ice cream cone!</p></div>
                    </div>
                </div>
                <div class='row justify-content-md-center'>
                    <div class='col-md-6 height-400 grid-text' style="background-image: url('/alspok/mm/stiliai/portfolio/portfolio-3.jpg')">
                        <div ><b>STRAWBBERIES</b><p>Strawbberies are so tasty snack expecialy with a little cugar on top!</p></div>
                    </div>
                    <div class='col-md-6 height-400 grid-text' style="background-image: url('/alspok/mm/stiliai/portfolio/portfolio-4.jpg')">
                        <div ><b>WORKSPACE</b><p>A yellow workspace with some scissors, pancles and other objects!</p></div>
                    </div>
                </div>
            </div>
        </section>

        <a id='section6'></a>
        <section class='section6' style='padding-left: 15%; padding-top: 10%'>
            <div class='container6 flex'>
                <div><h3>The buttons below are imposible to resist... </h3></div><br>
            </div>
            <div class='container6 flex'>
                <button class='white-button'>Click Me!</button>
                <div style='width: 20px; height: 10px;'></div>
                <button class='black-button'>Look at Me!</button>
            </div>
        </section>

        <a id='section7'></a>
        <section class='section7'>
                    <div class='heigth-400'><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26013.526523388507!2d25.376432194957342!3d54.80997420276169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slt!4v1540278202576" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </section>

        <section class='section8' style='padding-left: 45%; padding-top: 5%'>
            <div class='container10' style='font-size: 50px; padding-left: 4%'>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-github"></i>
            </div>
            <div class='container11' style='align-content:center; font-size: 8px; padding-left:7%'>Copyright: My Website 2018</div>
        </section>
        <div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>
    </body>
</html>