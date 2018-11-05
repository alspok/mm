<!DOCTYPE HTML>
<!--
	Iridium by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<?php header_info(); ?>
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script> -->
			<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/skel-noscript.css" />
			<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style.css" />
			<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style-desktop.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
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

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<!-- <header>
								<h2>Welcome to Iridium!</h2>
								<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
							</header>
							<a href="#" class="image full"><img src="images/pic07.jpg" alt="" /></a>
							<p>This is <strong>Iridium</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
							<p>Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor.</p> -->
							<?php
                            if ( isset( $strError ) && !empty( $strError ) ) {
                                klaida( "Klaida", $strError );
                            }

                            include ( "priedai/centro_blokai.php" );
                            include ( $page . ".php" );
                        ?>
						</section>
					</div>
					
					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<?php include ( "priedai/desines_blokai.php" ); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>
		
	</body>
</html>