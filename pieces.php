<?php

class artwork {
	var $id;
	var $num;
	var $title;
	var $source;
	var $medium;
	var $originalPrice;
	var $p5x7;
	var $p8x10;
	var $p11x14;
	var $w;
	var $h;
	var $sold;
	function __construct($n, $id, $title, $source, $medium, $originalPrice, $w, $h, $s)
		{
			$this->num = $n;
			$this->id = $id;
			$this->title = $title;
			$this->source = $source;
			$this->medium = $medium;
			$this->originalPrice = $originalPrice;
			$this->w = $w;
			$this->h = $h;
			$this->p5x7 = $originalPrice * 0.15;
			$this->p8x10 = $originalPrice * 0.25;
			$this->p11x14 = $originalPrice * 0.40;
			$this->sold = $s;
		}
	function setSold(){
		$this->sold = 1;
	}
}

@ $mysqli = new mysqli('mysqlcluster22', 'ftp3112864', 'calmD0wn!', 'klausebart');
if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
else{
	echo "Connected.";
}

$pic = array();

$q = "SELECT * FROM `pieces` WHERE 1";
$result = $mysqli->query($q);

$i = 0;
while ($row = $result->fetch_assoc()){
	//echo "Row number: ".$row['num']."<br>Title: ".$row['title']."<br> ";
	$pic[$i] = new artwork($row['num'], $row['id'], $row['title'], $row['src'], $row['medium'], $row['originalPrice'], $row['w'], $row['h'], $row['sold']);
	$i = $i +1;
	//echo $pic[1]->title;
}




function displayArt($work){
	$mID = "mod".$work->id;
	$buttonID = "btn".$work->num;
	$functionf = "f".$work->num;
	echo "<td class='artContainer col-12 col-sm-6 col-md-6 col-lg-4 col-xlg-4' align='center'> <!--".$work->id." -->
					<div class='outerArtContainer'>
						<p class='ttl'>".$work->title."</p>
						<div class='scalingArtContainer'>
							<img class='picture' src='".$work->source."'>
								<button type='btn' id='".$buttonID."' class='overlay' align='center' onmouseover =\"".$functionf."()\">View</button>
							</div>
							<p class='descript'>".$work->medium."<br>".$work->w."''x".$work->h."''</p>
						</div>
					</div>
				</td>";
}

function insertModalFunction($work)
{
	$mID = "mod".$work->id;
	$thismod = "modal".$work->num;
	$openThis = "btn".$work->num;
	$spanThis = "span".$work->num;
	$buttonID = "btn".$work->num;
	$closeThis = "close".$work->num;
	$functionf = "f".$work->num;

	echo "
	<script type='text/javascript'>
	".$functionf." = function(){
			var ".$thismod." = document.getElementById('".$mID."');
			var ".$openThis." = document.getElementById('".$buttonID."');
			var ".$spanThis." = document.getElementById('".$closeThis."');

	".$openThis.".onclick = function(){
		".$thismod.".style.display = 'block';
	}
	window.onclick = function(event){
		if(event.target== ".$thismod."){
			".$thismod.".style.display = 'none';
		}
	}
}
</script>";
}



function insertModal($work){
	$mID = "mod".$work->id;
	$closeThis = "close".$work->num;
	$thismod = "modal".$work->num;
	
	echo "
	<div class='modal' id='".$mID."' style='display:none'>
	<div style='box-sizing:inherit; width:30px; height:30px; margin-bottom:1px; right:0; top:30px;' class='close' onclick=\"cf".$work->num."()\">X</div>
		<div class='modal-content cont' style='float:center; width:auto;'>
			<table class='item'>
				<tr class='formodal' style='height:500px; width: auto; background-color: rgba(186, 180, 169, .2);'>
					
					<td class='forimg' style='width: auto; height:auto; max-height: 90%; text-align: center; padding:0;'>
						<img class='picture' style='max-height:500px; max-width: 600px; -webkit-animation-name: animatetop; -webkit-animation-duration: 0.5s; animation-name: animatetop; animation-duration: 0.5s;'
						src='".$work->source."'>
					</td>
					<td style='height=80%; width:300px; padding: 3%; vertical-align:top; '>
							<h1 class='sliderL formodal'>".$work->title."</h1>
							<p>".$work->medium."<br>".$work->w."''x".$work->h."''</p>
							
							<div class ='sliderR formodal'>

							<p class='sliderR formodal' >
								Original Piece: $".$work->originalPrice."";
			//disable button if work is sold already
								if($work->sold == 0){echo"
									<button title='Add original artwork' type='submit' class='add'>+</button>
								";}
								else {echo "
									<button title='Sold out' class='add cantadd'>+</button>"
								;}
			//continue
			echo "	
							</p>
							
								<p class='sliderR formodal' style='webkit-animation-delay: 0.05s; animation-delay: 0.05s;'>
									5x7in &nbsp; Print &nbsp;&nbsp;&nbsp;&nbsp;$".$work->p5x7."
									<button title='Add print' type='submit' class='add'>+</button>
								</p>
								
								<p class='sliderR formodal' style='webkit-animation-delay: 0.1s; animation-delay: 0.1s;'>
									8x10in Print &nbsp;&nbsp;&nbsp; $".$work->p8x10."
									<button title='Add print' type='submit' class='add'>+</button>
								</p>

								<p class='sliderR formodal' style='webkit-animation-delay: 0.15s; animation-delay: 0.15s;'>
									11x14in Print &nbsp;&nbsp;&nbsp; $".$work->p11x14."
									<button title='Add print' type='submit' class='add'>+</button>
								</p>
							</div>					
							
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<script>
	function addOrg(){
		document.getElementById('Cart').innerHtml = +10;
	}
	function cf".$work->num."(){
		document.getElementById('".$mID."').style.display = 'none';
	}
	</script>
	";
}
/**/


?>