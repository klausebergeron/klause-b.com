<!DOCTYPE html>
    <html>

	<head>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Princess Sofia' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Aref Ruqaa' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
        <link href="topBar_t.css" rel="stylesheet" type="text/css">
        <link href='twitterpgStyles.css' rel='stylesheet' type="text/css">
	</head>

<body>
    <div class="backdrop" style="background: #0084B4;">

<?php

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

@ $mysqli = new mysqli('mysqlcluster23', 'klause', 'calmD0wn!', 'sorters');
if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

$newName = $_POST['newUsername'];
$newPsw = $_POST['newPsw'];


$q = 'INSERT INTO `users` VALUES (NULL, "'.$newName.'", "'.$newPsw.'", 1000)';
$mysqli->query($q);
$mysqli->close();
echo "<div class='content'>
    <div id='underline' style='width: 100%; height: 2%; background: #fff; margin-bottom:5%;'></div>
     
     <div id='mainBox'><h1>User added</h1><br><h2>Redirecting to login page...</h2>";
echo "
<script type='text/javascript'>   
function Redirect() {  
	window.location='classify_tweets_login.php'; 
} 
setTimeout('Redirect()', 2000);   
</script>

";
?>

</div></body></html>