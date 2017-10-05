<?php
@ $db = new mysqli('mysqlcluster23', 'klause', 'calmD0wn!', 'sorters');
if (mysqli_connect_errno()) {
    echo 'Unable to connect to DB...';
}
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fileT = "$DOCUMENT_ROOT/twitterClassifs/trueST.txt";
$handlefileT = fopen($fileT, 'a') or die('Cannot open file:  '.$fileT);
$fileF = "$DOCUMENT_ROOT/twitterClassifs/falseST.txt";
$handlefileF = fopen($fileF, 'a') or die('Cannot open file:  '.$fileF);

$query = "SELECT * FROM `streamingTweets` WHERE tweetID <= 800";
$tweetsQuery = $db->query($query);
$i=0;
while ($tweets = $tweetsQuery->fetch_assoc()){
	//var_dump($tweets);
	$fv = $tweets['fVotes'];
	//echo $fv." ";
	$tv = $tweets['tVotes'];
	//echo $tv." ";
	$oneLineText = trim(preg_replace('/\s+/', ' ', $tweets['tweetText']));
	$tweetText = $tweets['userID']."\t".$oneLineText."\t".$tweets['tweetDate']."\n";
	echo $tweetText;
	if ($tv >= $fv * 2){
		fwrite($handlefileT, $tweetText);
	}
	elseif ($fv >= $tv * 2) {
		fwrite($handlefileF, $tweetText);
	}
	$i = $i +1;
}

fclose($handlefileF);
fclose($handlefileT);
//var_dump($tweets);

?>