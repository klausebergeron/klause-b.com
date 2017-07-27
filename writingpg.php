<!DOCTYPE html>
    <html>
    <head>
        <?php include 'includes/mostLinks.php'; getLinks();?>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<style>

#underlinethin {
	position: relative;
	float: center;
	width:80%;
	background: grey;
	height: 1px;
	margin: auto;
	margin-bottom: 3%;
	display: block;
	z-index: 1;
}

.headline {
	position: relative;
	display: block;
    width: 40%;
	margin:auto;
	margin-top: 5%;
	text-align: center;
	font-size: 100pt;
	font-family: Barrio;
	z-index: 1;
	color: black;
}
.main {
	position: relative;
	display: block;
	height: 100%;
	margin-left: 30%;
	margin-right:30%;
	z-index: auto;
}
	table.content {
		position:relative;
		width:100%; 
	}
	
	th.content {
		position: relative;
		background-color: #152E5B;
		color: #8BA0C5;
		font-size: 20pt;
		font-family: Actor;
		padding: 5px;
		text-align: center;
		padding-right: 5%;
	}
	
	tr.content {
		position: relative;
		background-color:#7692C5;
		color: black;
		font-size: 13pt;
		font-family: Cambria;
		padding: 30px;
		height: 20px;
		padding: 2%;
	}
	.content td, a {text-decoration: none; color: black; }
	

	#gradLeft{
		  background: white; /* For browsers that do not support gradients */
		  background: -webkit-linear-gradient(left, #152E5B , white); /* For Safari 5.1 to 6.0 */
		  background: -o-linear-gradient(right, #152E5B, white); /* For Opera 11.1 to 12.0 */
		  background: -moz-linear-gradient(right, #152E5B, white); /* For Firefox 3.6 to 15 */
		  background: linear-gradient(to right, #152E5B , white); /* Standard syntax */
		  position: fixed;
		  display: inline-block;  
		  left: 0;
		  top:0;
  		  height: 100%;
		  width: 30%;
		  z-index: -1;
	}
		#gradRight{
		  background: white; /* For browsers that do not support gradients */
		  background: -webkit-linear-gradient(right, #152E5B , white); /* For Safari 5.1 to 6.0 */
		  background: -o-linear-gradient(left, #152E5B, white); /* For Opera 11.1 to 12.0 */
		  background: -moz-linear-gradient(left, #152E5B, white); /* For Firefox 3.6 to 15 */
		  background: linear-gradient(to left, #152E5B , white); /* Standard syntax */
		  position: fixed;
		  display: inline-block;
		  right: 0;
		  top:0;
		  height: 100%;
		  width: 30%;
		  z-index: -1;
	}
	
		</style>
  
      
<body>

  
   <div id='gradRight' align="right"></div>
   <div id='gradLeft' align="left"></div>
   
    <?php
        require_once 'includes/showHeadbar.php';
        showHeadbar('writing');
     ?>    

    
	<h1 class='headline'>Writing</h1>
    <div id='underlinethin'></div>
        <div class="main">
            <div id='underline' style='width: 100%; height: 5%;'></div>
        <table class="content" align='center' style='padding:5%; padding-top:0; margin-bottom: 8%;'>
              <th class="content">Short Stories</th>
               <tr class="content"><td><a href='writing_works/melody.php' style="padding-left: 3%; margin: 2px;">Melody.  .  .  .  .  .  .  .  .  .  .  .  .
               .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  . .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>
               
               <th class="content">Book Chapters</th>
               <tr class="content"><td><a href='writing_works/siliconFaerie_ch1.php' style="padding-left: 3%; margin: 2px;">Silicon Faerie.  .  .  .  .  .  .
               .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  . .  .  .  .  .  Chapter 1  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>
               <tr class="content"><td><a href='writing_works/siliconFaerie_ch2.php' style="padding-left: 3%; margin: 2px;">Silicon Faerie.  .  .  .  .  .  .
               .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  . .  .  .  .  .  Chapter 2  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>
               
               
               <th class="content">Poetry</th>
               <tr class="content"><td><a href='writing_works/gaps.php' style="padding-left: 3%; margin: 2px;">Gaps.  .  .  .  .  .  .
               .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  . .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .
               .  .  .  . </td></tr>
               <tr class="content"><td><a href='writing_works/belt.php' style="padding-left: 3%; margin: 2px;">Belt.  .  .  .  .  .  .
               .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  . .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .
               .  .  .  .  .</td></tr>
               <tr class="content"><td><a href='writing_works/losing.php' style="padding-left: 3%; margin: 2px;">Losing.  .  .  .  .  .  .
               .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  . .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .  .
               .  .  .  . </td></tr>
               <th class="content">Papers</th>
               <tr class="content"><td><a href='writing_works/jamillaessay.php' style="padding-left: 3%; margin: 2px;">Conveying the Experience of Emotion: 
               <br><span style="font-size: 12pt; margin-left: 5%;">Aitmatov and Pirandello's Use of the Arts</a></td></tr>
               
               <tr class="content"><td><a href='writing_works/stress_fractures.php' style="padding-left:3%; margin: 2px;">Ontological Stress Fractures: <br><span style="font-size: 12pt; margin-left: 5%;">The Uncertain Self of the Colonized in Garro and Dangarembga</span></a></td></tr>
		</table>
	</div>
    </body>
</html>

    
