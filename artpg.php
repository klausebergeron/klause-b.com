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
		foreach ($pic as $value) {
			insertModalFunction($value);}	
	?>
</head>

<body>

<?php
@ $mysqli = new mysqli('mysqlcluster22', 'ftp3112864', 'calmD0wn!', 'klausebart');
if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
else
	console.log('Connected!');
?>

    <?php showHeadbar('art'); ?>
	<div id='sideBar' class='hidden-md-down' style="z-index: -1;">
		<h1 class='title'>Art</h1>
		<div id='underlinethin'></div>
		<p1>This is a page<br> where you can browse my art stuff</p>
		<p2>Purchasing<br> options are shown for demonstrative, web-development purposes at this time <br>You may request a custom peice by emailing klausebergeron@gmail.com</p>
    </div>
    
    <div>
    	<div id='Cart'></div>
    	<?php foreach ($pic as $value){
			insertModal($value);} ?>
    </div>
    
    <div id='mainBackground'></div>
		<div class='main'>
		<h1 class='title hidden-lg-up'>Art</h1>
	  		<table id='main' class='container'>
	  			<tr class='row'><?php	foreach ($pic as $value){
			displayArt($value);}	?>
		</tr>
			</table> <!-- end of main table -->
		</div> <!--end of main div -->
		
		
		
</body>
</html>


















