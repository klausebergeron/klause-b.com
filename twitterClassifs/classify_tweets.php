<?php
if($_POST["uname"] != ""){
 setcookie("username", $_POST["uname"], (time() + 36000));
    setcookie("password", $_POST["psw"], (time() + 36000));

}



?>


<!DOCTYPE html>
    <html>
    
<!--- 
    Moshe
    Flo
    Grove
    Konstantin
    John
    Mike
-->
	<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

        <script type = 'text/javascript'>
            $(document).ajaxStop(function(){
                window.location.reload()
            })
        </script>
	</head>


<body>
    <div class="backdrop" style="background: #0084B4;">
<?php

        require_once 'showHeadbar_t.php';
        showHeadbar('websites');
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $user = $_POST['uname'];
        $pass = $_POST['psw'];

        if($user == "")
            $user = $_COOKIE['username'];
        if($pass == "")
            $pass = $_COOKIE['password'];

    
@ $mysqli = new mysqli('mysqlcluster23', 'klause', 'calmD0wn!', 'sorters');
if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        $query = "SELECT * FROM users where name = '".$user."'";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        if($_COOKIE["username"] == ""){
            if($row['name']==""){ 
                echo "
                <script type='text/javascript'> window.location = 'http://klause-b.com/twitterClassifs/classify_tweets_login.php' </script>";
            }
            elseif ($row['password'] != $pass) {
                echo "
                <script type='text/javascript'> window.location = 'http://klause-b.com/twitterClassifs/classify_tweets_login.php' </script>";
            }
            else{
                setcookie("username", $user, (time() + 3600000));
                setcookie("password", $pass, (time() + 3600000));
    
            }
        }


            $upTo = $row['upTo']; //tracks wich tweet they're up to classifying
            echo "<div class='content'>
                <div class='loginInf'></img>".$user."<img src='http://freevector.co/wp-content/uploads/2011/04/59046-twitter-logo-outline-200x200.png' id='tLogo'></div>";
        $tweet = "SELECT * FROM streamingTweets WHERE tweetID ='".$upTo."'";
        $tresult = $mysqli->query($tweet);
        $trow = $tresult->fetch_assoc();

            echo "
        <div id='underline' style='width: 100%; height: 1%; background: #fff; margin-bottom:3%;'></div>
            <div id='mainBox'>
                <h3>Would you consider the following tweet an indicator that it's author may suffer from depression:</h3>
                    <div id='textBox'>
                        <div id='numTracker'>Tweet #".$trow['tweetID']."</div><br>
                        <div id = 'tweetText'>".$trow['tweetText']."</div>
                    </div>
                    <form method='GET' action='vote.php' style='width:100%;'>
                    <input type = 'text' style = 'display:none' name = 'id' value = '".$trow['tweetID']."'>
                    <input type = 'text' style = 'display:none' name = 'user' value = '$user'>
                    <input type = 'text' id = 'voteValue' style = 'display:none' name = 'vote' value = ''>
                        <div align='center' style='display: block; width:90%; margin:auto; position: relative;'>
                        <button type = submit class='field yn' onclick=\"document.getElementById('voteValue').value = 1\">Yes</button> 
                        <button type = submit class='field yn' onclick=\"document.getElementById('voteValue').value = 0\">No</button></div>
                    </form>

            </div>
        </div>
        <script type = 'text/javascript'>

        var f = function(vote, tweetID, user){
            location.reload();
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    console.log(this.responseText)
                    document.getElementById('element').innerHTML = this.responseText;
                };

                xmlhttp.open('GET', 'vote.php?vote='+vote+'&id='+tweetID+'&user='+user, true);
                    xmlhttp.send();
                    location.reload(); 
                 //   location.replace(location.href)

        }
        </script>

    ";

//end content, body, html~    
echo "
    </div>
</body>
</html>";$mysqli->close();







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

?>