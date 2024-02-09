<!doctype html>
<html>
<head>
		<?php include 'includes/mostLinks.php'; getLinks();?>
		<link href="modal.css" type="text/css" rel="stylesheet">
        <link rel='stylesheet' type="text/css" href='artpgStyles.css'>
        <link rel='stylesheet' type-"text/css" href="flexBoxes.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script type="text/javascript" src="artPrototypes.js"></script>
		<?php
    	require_once 'includes/showHeadbar.php';
		#include 'pieces.php';
		#include 'cartwork.php';
		#foreach ($pic as $value) {
		#	insertModalFunction($value);}	
	?>
</head>

<body onload = "l()">

<?php
#@ $mysqli = new mysqli('mysqlcluster22', 'ftp3112864', 'calmD0wn!', 'klausebart');
#if ($mysqli->connect_errno) {
#            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
#        }
#else
#	console.log('Connected!');
#?>

    <?php showHeadbar('art'); ?>
	<div id='sideBar' style="z-index: -1;">
      <h1 classname="title">Art</h1>
      <div id='underlinethin'></div>
	  <p1>This is a page where you can browse my art stuff</p>
   		<p2>Purchasing options are shown for demonstrative, web-development purposes at this time <br>You may request a custom peice by emailing klausebergeron@gmail.com</p>
    </div>
    
	 
	
  <div id='mainBackground'>
	<div class='main'>
	  <div id='main'>
				<div class='artContainer' align="center"><!-- 1 -->
					<div class='outerArtContainer'>
						<p id='title1' class='ttl'></p>
						<div class='scalingArtContainer'>
							<img id='picture1' class='picture'/>
							<div class="overlay" id="ov1">
								<div class="ttl">See More</div>
							</div>
						</div>
						<p id='desc1' class='descript'></p>
					</div>
				</div>
				
				<div class='artContainer' align="center"><!-- 2 -->
					<div class='outerArtContainer'>
						<p id='title2' class='ttl'></p>
						<div class='scalingArtContainer'>
							<img id='picture2' class='picture'/>
							<div class="overlay">
								<div class="ttl">See More</div>
							</div>
						</div>
						<p id='desc2' class='descript'></p>
					</div>
				</div>
				
				
				<div class='artContainer' align="center"><!-- 3 -->
					<div class='outerArtContainer'>
						<p id='title3' class='ttl'></p>
				  		<div class="scalingArtContainer">
							<img id='picture3' class='picture'>
							<div class="overlay">
								<div class="ttl">See More</div>
							</div>
						</div>
						<p id='desc3' class='descript'></p>
					</div>
				</div>

			<div class='artContainer' align="center"><!-- 4 -->
				<div class='outerArtContainer'>
					<p id='title4' class='ttl'></p>
					<div class='scalingArtContainer'>
						<img id='picture4' class='picture'/>
						<div class="overlay">
								<div class="ttl">See More</div>
							</div>
					</div>
					<p id='desc4' class='descript'></p>
				</div>
			</div>
				
			<div class='artContainer' align="center"><!-- 5 -->
				<div class='outerArtContainer'>
					<p id='title5' class='ttl'></p>
					<div class='scalingArtContainer'>
						<img id='picture5' class='picture'/>
						<div class="overlay">
								<div class="ttl">See More</div>
							</div>
					</div>
					<p id='desc5' class='descript'></p>
				</div>
			</div>

				
			<div class='artContainer' align="center"><!-- 6 -->
				<div class='outerArtContainer'>
					<p id='title6' class='ttl'></p>
					<div class="scalingArtContainer">
						<img id='picture6' class='picture'/>
						<div class="overlay">
							<div class="ttl">See More</div>
						</div>
					</div>
					<p id='desc6' class='descript'></p>
				</div>
			</div>
		</div>
		</div>
</div>
			
	</div><!-- end main (artpgStyles.css)-->
	</div><!-- end content (topBar.css) -->
	<!-- begin legacy code with sql connection
	<div id='sideBar' class='hidden-md-down' style="z-index: -1;">
		<h1 class='title'>Art</h1>
		<div id='underlinethin'></div>
		<p1>This is a page<br> where you can browse my art stuff</p>
		<p2>Purchasing<br> options are shown for demonstrative, web-development purposes at this time <br>You may request a custom peice by emailing klausebergeron@gmail.com</p>
    </div>
    
    <div>
    	<div id='Cart'></div>
    	<#?php foreach ($pic as $value){
			insertModal($value);} ?>
    </div>
    
    <div id='mainBackground'></div>
		<div class='main'>
		<h1 class='title hidden-lg-up'>Art</h1>
	  		<table id='main' class='container'>
	  			<tr class='row'><#?php	foreach ($pic as $value){
			displayArt($value);}	?>
		</tr>
			</table> -- end of main table --
		</div> --end of main div 
	end legacy code -->
		
		
		
</body>
</html>


















