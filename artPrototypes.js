
//title (t) and dimensions (dim) of original work i.e. "Split Skies", "5x8"
//medium (med) and price (orgPrc) of original work i.e. "Watercolors", 40.00
//base price of prints (==price of Matte, cheapest prints) i.e. 3.05, 5.99, 8.80
//if the original picture has been sold yet (s) if true, you can still order prints
//sample call: 
//<img id="piece"></img>
//var splitSkies = new Piece("Split Skies", "/art/splitSkies.png", "8x8", "Watercolors", 40.00, 3.05, 5.99, 8.80)
//document.getElementById("piece").src = splitSkies.source;
//splitSkies.addPrint("Glossy", "8x10");
var l = function(){
function artwork(inp_title, inp_medium, inp_source, inp_originalPrice, inp_p5x7, inp_p8x10, inp_p11x14, inp_h, inp_w)
{
	this.title = inp_title;
	this.source = inp_source;
	this.medium = inp_medium;
	this.originalPrice = inp_originalPrice;
	this.p5x7 = inp_p5x7;
	this.p8x10 = inp_p8x10;
	this.p11x14 = inp_p11x14;
	this.h = inp_h;
	this.w = inp_w;
}
 var pic1 = new artwork("Acid Eye", "Pencil", "art/acid eye.jpg", 5.00, 2.50, 2.75, 2.85, 5, 3);
	document.getElementById("title1").innerHTML = pic1.title;
	document.getElementById('desc1').innerHTML = pic1.medium + "</br>" + pic1.w + '"x' + pic1.h + '" ';
	document.getElementById('picture1').src = pic1.source;
 var pic2 = new artwork("Against the Wall Dancer", "Greyscale Marker", "art/against the wall dancer.jpg", 6.50, 3.00, 3.25, 3.50, 5, 3);
	document.getElementById("title2").innerHTML = pic2.title;
	document.getElementById('desc2').innerHTML = pic2.medium + "</br>" + pic2.w + '"x' + pic2.h + '" ';
	document.getElementById('picture2').src = pic2.source;
 var pic3 = new artwork("Always be Doing Something", "Pencil", "art/always be doing something.jpg", 1.00, 1.00, 1.00, 1.00, 5, 3);
	document.getElementById("title3").innerHTML = pic3.title;
	document.getElementById('desc3').innerHTML = pic3.medium + "</br>" + pic3.w + '"x' + pic3.h + '" ';
	document.getElementById('picture3').src = pic3.source;
 var pic4 = new artwork("Anxiety", "Watercolor Pencil", "art/anxiety.jpg", 20.00, 5.00, 5.50, 6.00, 5, 5);
	document.getElementById("title4").innerHTML = pic4.title;
	document.getElementById('desc4').innerHTML = pic4.medium + "</br>" + pic4.w + '"x' + pic4.h + '" ';
	document.getElementById('picture4').src = pic4.source;
 var pic5 = new artwork("Audrey Smile", "Greyscale Marker", "art/audrey smile.jpg", 15.00, 5.00, 5.50, 6.00, 4, 6);
	document.getElementById("title5").innerHTML = pic5.title;
	document.getElementById('desc5').innerHTML = pic5.medium + "</br>" + pic5.w + '"x' + pic5.h + '" ';
	document.getElementById('picture5').src = pic5.source;
 var pic6 = new artwork("Blue Dancer", "Greyscale Marker, Watercolors", "art/blue dancer.jpg", 6.50, 3.00, 3.25, 3.50, 5, 3);
	document.getElementById("title6").innerHTML = pic6.title;
	document.getElementById('desc6').innerHTML = pic6.medium + "</br>" + pic6.w + '"x' + pic6.h + '" ';
	document.getElementById('picture6').src = pic6.source;
	







}
/*num_artworks = 6;
for (int i = 0; i <= num_artworks; i++){
	
		iP = "pic" + i;
		iT = "title" + i;
		iM = "med" + i;
		iD = "dim" + i;
		iS = "sr" + i;
		document.getElementById(iT).innerHTML = iP.title;
		document.getElementById(iM).innerHTML = iP.medium;
		document.getElementById(iD).innerHTML = iP.w + '"x' + iP.h + '" ';
}*/

/*
function Piece(t, src, dim, med, orgPrc, p5x7, p8x10, p11x14)
{
	this.title = t;			//string (key value)
	this.source = src;		//path to picture
	this.dimensions = dim;
	this.medium = med;
	this.originalPrice = orgPrc;	//float
	this.addOriginal = false;
	this.addFrame = false;			//bool
	this.framePrice = function(){
		if (this.addFrame == true)
			return op * 0.2;
		else
			return 0;
	}
	this.print5x7Price = p5x7;		//float
	this.print8x10Price = p8x10;	//float
	this.print11x14Price = p11x14; 	//float
	this.sold = false;					//bool
	this.numMattePrints5x7 = 0;
	this.numMattePrints8x10 = 0;
	this.numMattePrints11x14 = 0;
	this.numGlossyPrints5x7 = 0;
	this.numGlossyPrints8x10 = 0;
	this.numGlossyPrints11x14 = 0;
	this.numCardstockPrints5x7 = 0;
	this.numCardstockPrints8x10 = 0;
	this.numCardstockPrints11x14 = 0;
	this.addPrint = function(printType, dimensions){
		if (printType == "Matte"){
			if(dimensions == "5x7")
				this.numMattePrints5x7 += 1;
			else if (dimensions == "8x10")
				this.numMattePrints8x10 += 1;
			else if (dimensions == "11x14")
				this.numMattePrints11x14 += 1;
		else if(printType == "Glossy")
			if(dimensions == "5x7")
				this.numGlossyPrints5x7 += 1;
			else if (dimensions == "8x10")
				this.numGlossyPrints8x10 += 1;
			else if (dimensions == "11x14")
				this.numGlossyPrints11x14 += 1;
		else if(printType == "Cardstock")
			if(dimensions == "5x7")
				this.numCardstockPrints5x7 += 1;
			else if (dimensions == "8x10")
				this.numCardstockPrints8x10 += 1;
			else if (dimensions == "11x14")
				this.numPrints11x14 += 1;
		}
	}
	this.subtractPrint = function(printType, dimensions){
		if (printType == "Matte"){
			if(dimensions == "5x7")
				this.numMattePrints5x7 -= 1;
			else if (dimensions == "8x10")
				this.numMattePrints8x10 -= 1;
			else if (dimensions == "11x14")
				this.numMattePrints11x14 -= 1;
		}
		else if(printType == "Glossy"){
			if(dimensions == "5x7")
				this.numGlossyPrints5x7 -= 1;
			else if (dimensions == "8x10")
				this.numGlossyPrints8x10 -= 1;
			else if (dimensions == "11x14")
				this.numGlossyPrints11x14 -= 1;
		}
		else if(printType == "Cardstock"){
			if(dimensions == "5x7")
				this.numCardstockPrints5x7 -= 1;
			else if (dimensions == "8x10")
				this.numCardstockPrints8x10 -= 1;
			else if (dimensions == "11x14")
				this.numPrints11x14 -= 1;
		}
		else{
			echo "Error!";
		}
	}
	this.totalPrice = function() {
		var oPriceTotal;
		if (this.addOriginal == True && this.addFrame == True)
			oPriceTotal = this.originalPrice + this.framePrice;
		else if (this.addOriginal == True && this.addFrame == False)
			oPriceTotal = this.originalPrice;
		else
			oPriceTotal = 0;

		var prints5x7Total = this.numMattePrints5x7*(this.print5x7Price) + 
							this.numGlossyPrints5x7*(this.print5x7Price+this.print5x7Price*0.2);
							this.numCardstockPrints5x7*(this.print5x7Price+this.print5x7Price*0.7);
		
		var prints8x10Total = this.numMattePrints8x10*(this.print8x10Price) + 
							this.numGlossyPrints8x10*(this.print8x10Price+this.print8x10Price*0.2);
							this.numCardstockPrints8x10*(this.print8x10Price+this.print8x10Price*0.7);

		var prints11x14Total = this.numMattePrints11x14*(this.print11x14Price) + 
							this.numGlossyPrints11x14*(this.print11x14Price+this.print11x14Price*0.2);
							this.numCardstockPrints11x14*(this.print11x14Price+this.print11x14Price*0.7);
		
		return oPriceTotal + prints5x7Total + prints8x10Total + prints11x14Total;
	}
}*/
	
