<!doctype html>
<html>
<head>
		<?php include 'includes/mostLinks.php'; getLinks();?>
		<link href="modal.css" type="text/css" rel="stylesheet">
        <link rel='stylesheet' type="text/css" href='artpgStyles.css'>
        <link rel='stylesheet' type-'text/css' href="flexBoxes.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php
    	require_once 'includes/showHeadbar.php';
		include 'pieces.php';
		include 'cartwork.php';
		insertModalFunction($pic1); insertModalFunction($pic2); insertModalFunction($pic3); insertModalFunction($pic4);
		insertModalFunction($pic5); insertModalFunction($pic6); insertModalFunction($pic7); insertModalFunction($pic8);
		insertModalFunction($pic9); insertModalFunction($pic10); insertModalFunction($pic11); insertModalFunction($pic12);
		insertModalFunction($pic13); insertModalFunction($pic14); insertModalFunction($pic15); insertModalFunction($pic16);
		insertModalFunction($pic17); insertModalFunction($pic18); insertModalFunction($pic19); insertModalFunction($pic20);
		insertModalFunction($pic21); insertModalFunction($pic22); insertModalFunction($pic23); insertModalFunction($pic24);
	?>
</head>

<body>
    <?php showHeadbar('art'); ?>
	<div id='sideBar' style="z-index: -1;">
		<h1 class='title'>Art</h1>
		<div id='underlinethin'></div>
		<p1>This is a page<br> where you can browse my art stuff</p>
		<p2>Purchasing<br> options are shown for demonstrative, web-development purposes at this time <br>You may request a custom peice by emailing klausebergeron@gmail.com</p>
    </div>
    
    <div>
    	<div id='Cart'></div>
    	<?php insertModal($pic1); insertModal($pic2); insertModal($pic3); insertModal($pic4);
		insertModal($pic5); insertModal($pic6); insertModal($pic7); insertModal($pic8);
		insertModal($pic9); insertModal($pic10); insertModal($pic11); insertModal($pic12);
		insertModal($pic13); insertModal($pic14); insertModal($pic15); insertModal($pic16);
		insertModal($pic17); insertModal($pic18); insertModal($pic19); insertModal($pic20);
		insertModal($pic21); insertModal($pic22); insertModal($pic23); insertModal($pic24); ?>
    </div>
    
    <div id='mainBackground'></div>
    
		<div class='main'>
	  		<table id='main'>
	  			<tr><?php	displayArt($pic1);	displayArt($pic4);	displayArt($pic10);	?></tr>
				<tr><?php	displayArt($pic19);	displayArt($pic2);	displayArt($pic16);	?></tr>
				<tr><?php	displayArt($pic21);	displayArt($pic20);	displayArt($pic3);	?></tr>
				<tr><?php	displayArt($pic17);	displayArt($pic5);	displayArt($pic6);	?></tr>
				<tr><?php	displayArt($pic7);	displayArt($pic8);	displayArt($pic9);	?></tr>
				<tr><?php	displayArt($pic18);	displayArt($pic11);	displayArt($pic12);	?></tr>
				<tr><?php	displayArt($pic13);	displayArt($pic14);	displayArt($pic15);	?></tr>
				<tr><?php	displayArt($pic22);	displayArt($pic23);	displayArt($pic24);	?></tr>
			</table> <!-- end of main table -->
		</div> <!--end of main div -->
		
		
		
</body>
</html>


















