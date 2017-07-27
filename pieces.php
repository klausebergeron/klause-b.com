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
	function __construct($id, $title, $source, $medium, $originalPrice, $w, $h)
		{
			$this->id = $id;
			preg_match('/\d+/', $id, $blerp);
			$this->num = $blerp[0];
			$this->title = $title;
			$this->source = $source;
			$this->medium = $medium;
			$this->originalPrice = $originalPrice;
			$this->w = $w;
			$this->h = $h;
			$this->p5x7 = $originalPrice * 0.15;
			$this->p8x10 = $originalPrice * 0.25;
			$this->p11x14 = $originalPrice * 0.40;
			$this->sold = 0;
		}
	function setSold(){
		$this->sold = 1;
	}
}

$pic1 = new artwork("pic1", "Acid Eye", "art/acid eye.jpg", "Pencil", 5.00, 3, 5);
$pic1->setSold();
$pic2 = new artwork("pic2", "Against the Wall Dancer", "art/against the wall dancer.jpg", "Greyscale Marker", 10.00, 3, 5);
$pic3 = new artwork("pic3", "Always be Doing Something", "art/always be doing something.jpg", "Pencil", 5.00, 3, 5);
$pic4 = new artwork("pic4", "Anxiety", "art/anxiety.jpg", "Watercolor Pencil", 20.00, 4, 4);
$pic5 = new artwork("pic5", "Hepburn", "art/audrey smile.jpg", "Greyscale Marker", 10.00, 4, 5);
$pic6 = new artwork("pic6", "Blue Dancer", "art/blue dancer.jpg", "Greyscale Marker, Watercolor", 10.00, 3, 5);
$pic7 = new artwork("pic7", "Chicken and Lilac", "art/chicken and lilac.jpg", "Watercolors", 50.00, 8, 10);
$pic8 = new artwork("pic8", "Untitled Commission", "art/commission1.jpg", "Watercolors", 10.00, 8, 5);
$pic8->setSold();
$pic9 = new artwork("pic9", "Dancer in Space", "art/dancer in space.jpg", "Watercolors, Sharpie", 10.00, 3, 5);
$pic10 = new artwork("pic10", "Dapper Duck", "art/dapper duck.jpg", "Watercolors, Sharpie", 15.00, 3, 5);
$pic11 = new artwork("pic11", "Eyeball", "art/eyeball.png", "Watercolors", 10.00, 5, 5);
$pic11->setSold();
$pic12 = new artwork("pic12", "Fashion Skeleton", "art/fashion skeleton.jpg", "Watercolors", 10.00, 3, 5);
$pic13 = new artwork("pic13", "Four Wings", "art/four wings.jpg", "Pen", 5.00, 3, 5);
$pic14 = new artwork("pic14", "Gimme Drugs", "art/gimme drugs.jpg", "Watercolors, Pen", 5.00, 3, 5);
$pic15 = new artwork("pic15", "Grace Portrait", "art/grace portrait.jpg", "Watercolors, Marker", 10.00, 5, 5);
$pic16 = new artwork("pic16", "Gravity", "art/gravity.jpg", "Watercolors, Pen", 30.00, 14, 11);
$pic17 = new artwork("pic17", "Green Fairy", "art/green fairy.png", "Watercolors, Pen", 10.00, 5, 5);
$pic17->setSold();
$pic18 = new artwork("pic18", "Humdrum", "art/humdrum self.jpg", "Watercolor Pencils, Pen, Sharpie, Wax", 25.00, 11, 8);
$pic19 = new artwork("pic19", "Standing Rainbow Dancer", "art/standing rainbow dancer.jpg", "Greyscale Marker, Watercolor", 20.00, 3, 5);
$pic20 = new artwork("pic20", "Subway Self", "art/subway self.jpg", "Greyscale Marker, Watercolor", 20.00, 3, 5);
$pic21 = new artwork("pic21", "Might", "art/might.jpg", "Watercolors", 40.00, 11, 8);
$pic22 = new artwork("pic22", "One Happy Quokka", "art/one happy quokka.jpg", "Watercolor Pencils", 25.00, 5, 8);
$pic23 = new artwork("pic23", "Split Skies", "art/split skies.jpg", "Watercolors, Pencil, Pen, Sharpie", 15.00, 11, 8);
$pic24 = new artwork("pic24", "Saturn", "art/Saturn.jpg", "Watercolor Pencils, Pen, Watercolors", 50.00, 11, 14);
//$pic25 = new artwork("pic25", "Rubicks Logo", "art/rubicks logo.jpg", "Markers", 10.00, 5, 5);


function displayArt($work){
	$mID = "mod".$work->id;
	$buttonID = "btn".$work->num;
	$functionf = "f".$work->num;
	echo "<td class='artContainer' align='center'> <!--".$work->id." -->
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

							<p class='sliderR formodal'>
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
							
								<p class='sliderR formodal'>
									5x7in &nbsp; Print &nbsp;&nbsp;&nbsp;&nbsp;$".$work->p5x7."
									<button title='Add print' type='submit' class='add'>+</button>
								</p>
								
								<p class='sliderR formodal'>
									8x10in Print &nbsp;&nbsp;&nbsp; $".$work->p8x10."
									<button title='Add print' type='submit' class='add'>+</button>
								</p>

								<p class='sliderR formodal'>
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