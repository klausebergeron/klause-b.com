<?php

@ $mysqli = new mysqli('mysqlcluster23', 'klause', 'calmD0wn!', 'sorters');
if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

$q = "SELECT * from `streamingTweets` where tweetID = '".$_GET['id']."'";
$result = $mysqli->query($q);
$resRow = $result->fetch_assoc();


//select f or t 
//true button calls: vote.php?up=1&id=4
//false button calls vote.php?up=0&id=4
if($_GET['vote'] == '1'){
	$currentTVotes = $resRow['tVotes'];
	$currentTVotes = $currentTVotes +1;
	$q2 = "UPDATE `streamingTweets` SET `tVotes` = ".$currentTVotes." WHERE `tweetID` = ".$_GET['id'];
	$mysqli->query($q2);
	//return into variable $tVotes
	//update~
}
if($_GET['vote'] == '0')
{
	$currentFVotes = $resRow['fVotes'];
	$currentFVotes = $currentFVotes +1;
	$q2 = "UPDATE `streamingTweets` SET `fVotes` = ".$currentFVotes." WHERE `tweetID` = ".$_GET['id'];
	$mysqli->query($q2);
}

if ($_GET['vote'] != 2){
	$uq = "SELECT `upTo` FROM users WHERE `name` = '".$_GET['user']."'";
	$uresult = $mysqli->query($uq);
	$uresRow = $uresult->fetch_assoc()['upTo'];
	$uresRow = $uresRow + 1;
	$uq2 = "UPDATE `users` SET `upTo` = $uresRow where `name` = '".$_GET['user']."'";
	//echo $uq2;
	$mysqli->query($uq2);
	$mysqli->close();
	//$q3 = "SELECT * FROM `streamingTweets` WHERE `tweetID` = $uresRow";
}
//var_dump($_GET);

echo "
<script type = 'text/javascript'>

window.location = 'http://klause-b.com/twitterClassifs/classify_tweets.php';

</script>
";


?>

