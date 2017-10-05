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
        require_once 'showHeadbar_t.php';
        showHeadbar('websites');
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

    
@ $db = new mysqli('mysqlcluster23', 'klause', 'calmD0wn!', 'sorters');
if (mysqli_connect_errno()) {
    echo 'Unable to connect to DB...';
}

/*
Setup streamingTweets database. Only needed to run once but keeping here in case
$tweets = file("$DOCUMENT_ROOT/twitterClassifs/streaming_tweets.txt");
foreach ($tweets as $key => $line) {
    $splitTweet = explode("\t", $line);
    //print_r($splitTweet);
    $authorID = $splitTweet[0];
    $tweetText = $splitTweet[1];
    $tweetDate = $splitTweet[2];
    $query = "INSERT INTO streamingTweets VALUES (NULL, $authorID, $tweetText, $tweetDate)";
    $db->query($query);
}*/

echo "<div class='content'>
    <div id='underline' style='width: 100%; height: 2%; background: #fff; margin-bottom:5%;'></div>
     
     <div id='mainBox'>
            <form class='inBox' id='loginBox' action ='classify_tweets.php' method='POST'>
            <table style='margin: auto;'>
                <tr>
                    <td><label><b>Username</b></label></td>
                    <td><label><b>Password</b></label></td>
                </tr>
                <tr>          
                    <td><input class='field' type='text' placeholder='Enter username' name='uname' required></td>
                    <td><input class='field' type='password' placeholder='Enter password' name='psw' required></td>
                </tr>
            </table>
                <br>
                <button class='field' type='submit' style='height:3%; width:30%; padding:3%; cursor:pointer'>Login</button>
           </form>
                <p>No login? <a href='create_login.php'>Create an account</a></p>
        </div>
    </div>
</div>";
echo "</body>
</html>";

?>