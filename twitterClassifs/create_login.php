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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            var verify = function(){
                  var xhttp;
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                              if(this.responseText == "true"){
                                    document.getElementById('usernameAlert').innerHTML = 'Username taken';
                                    document.getElementById('newUsername').style = 'background:#f46461';
                              }
                              else {
                                document.getElementById('usernameAlert').innerHTML = '';
                                document.getElementById('newUsername').style = 'background:#ffffff';
                              }
                        }
                  };
                  xhttp.open("GET", "checkusername.php?newUsername="+document.getElementById('newUsername').value, true);
                  xhttp.send();   


            }
        </script>
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
echo "<div class='content'>
    <div id='underline' style='width: 100%; height: 2%; background: #fff; margin-bottom:5%;'></div>
     
     <div id='mainBox'>
            <form class='inBox' id='loginBox' action ='add_user.php' method='POST'>
                <label><b>Username</b></label>
                <br>
                <input style='inline-block' onkeyup = 'verify()' class='field' type='text' id = 'newUsername' placeholder='Create username' name='newUsername' required>
                  <p id='usernameAlert' style='display: inline-block; position: absolute;'></p>
                <br><br>
                <label><b>Password</b></label>
                <br>
                <input class='field' type='password' placeholder='Create password' name='newPsw' required>
                <br><br>
                <button class='field' type='submit' style='height:3%; width:30%; padding:3%; cursor:pointer'>Create Account</button>
           </form>
        </div>
    </div>
</div>";
echo "</body>
</html>";