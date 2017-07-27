<?php


function showHeadbar($page)
{
	echo "
    
		<nav class='header navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse' >
   			
        	<a class='navbar-brand' href='index.html' style='width: 170px;'>
				<img type='image' src='logos_buttons/klause-b-stencil-logo8.png' class='stencilLogo'>
            	<name style='font-family: Caveat; color: white; font-size: 18pt;'>claudia bergeron</name>
        	</a>

<button class='navbar-toggler navbar-toggler-right collapsed' type='button' data-toggle='collapse' data-target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-label='Toggle navigation'>
        		<span class='navbar-toggler-icon'></span>
      		</button>
        	<div class='navbar-collapse collapse' id='navbarCollapse' aria-expanded='false' style='height:100%; background:#24292e;'>
				<ul class='navbar-nav ml-auto' style='font-family: Barrio; text-align: center;'>";
					if($page == 'websites') {formatting('websites');}
					else {echo "<li class='nav-item' style='margin-left:5px; margin-right:5px;'>
							<a class='nav-link' style='height:100%; width:100%;' href='websitespg.php'>websites</a></li>";}
					if($page == 'art') {formatting('art');}
					else {echo "<li class='nav-item' style='margin-left:5px; margin-right:5px;'>
							<a class='nav-link' style='height:100%; width:100%;' href='artpg.php'>art</a></li>";}
					if($page =='research') {formatting('research');}
					else {echo "<li class='nav-item' style='margin-left:5px; margin-right:5px;'>
								<a class='nav-link' style='height:100%; width:100%;' href='researchpg.php'>research</a></li>";}
					if($page == 'writing') {formatting('writing');}
					else {echo "<li class='nav-item' style='margin-left:5px; margin-right:5px;'>
								<a class='nav-link' style='height:100%; width:100%;' href='writingpg.php'>writing</a></li>";}
					if($page == 'programs') {formatting('programs');}
					else {echo "<li class='nav-item' style='margin-left:5px; margin-right:5px;'>
								<a class='nav-link' style='height:100%; width:100%;' href='programspg.php'>programs</a></li>";}

					echo"
				</ul>
			</div>
        </nav> <!-- end header (topBar.css) -->
		
		<script src='https://code.jquery.com/jquery-3.1.1.slim.min.js' integrity='sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n' crossorigin='anonymous'></script>
    <script>window.jQuery || document.write('<script src=\"jquery.min.js\"><\/script>')</script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' integrity='sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb' crossorigin='anonymous'></script>
    <script src='bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js'></script>";
};



function formatting($pg)
{
    echo "<li class='nav-item active'style='font-size:18; margin-left:5px; margin-right:5px; border-bottom-style:solid; border-bottom-width: 1px; border-color=grey;'><a class='nav-link' style='height:100%; width:100%; color:white;' href='".$pg."pg.php'>".$pg."</a></li>";
};

?>