<!DOCTYPE html>
    <html>
    <head>
        
        <?php include 'includes/mostLinks.php'; getLinks();?>
        <link rel='stylesheet' type="text/css" href='artpgStyles.css'>
        <link rel='stylesheet' type="text/css" href='suppliesStyles.css'>
        <link rel='stylesheet' type="text/css" href='flexBoxes.css'>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

        <body style="background: #D6D5CC; height: 100%;">
    <?php
        require_once 'includes/showHeadbar.php';
        showHeadbar('art');
     ?>

    <div id='sideBar' style="z-index: -1; width:22%">
        <h1 class='title'>Art</h1>
        <div id='underlinethin'></div>
        <p1>Here's a<br>page where you can fake buy fake art supplies<br> and get a fake receipt</p>
        <p2></p>
    </div>


    <script type="text/javascript">
        var pencils = 1;
        function Pencil(t, w, q){ 
            var type; var weight; var quantity; var price; var tprice;  this.type = t;   this.weight = w; this.quantity = 0;
            this.price = (t == 'Ebony') ? 0.5 : 0.4; //if it's an ebony pencil it's 50 cents, if graphite then 40
            this.setType = function(st){
                if (st == 'Ebony')
                    this.price = 0.5;
                else
                    this.price = 0.4;
                this.type = st;
            }
        }
        var myPencil = new Pencil('Graphite', '6H', 0);

        function Pen(t, c, q){
            var type; var color; var quantity; var price; var tprice;  this.type = t;   this.color = c; this.quantity = 0;
            this.price = 10.00; this.tprice = this.price;
            this.setType = function(st){
                this.type = st;
                if (st == 'Fountain')
                    this.price = 10.00;
                else if (st =='Ballpoint')
                    this.price = 5.00;
                else if (st == 'Fibertip')
                    this.price = 15.00;
                else if (st =='Rollerball')
                    this.price = 6.00;
                else
                    this.price = 8.00;
            }
        }
        var myPen = new Pen('Fountain', 'black', 0)

        function Brush(m, sh, sz, h, q){
            var material; var shape; var size; var handle; var quantity; var price; var tprice;
            this.material = m; this.shape = sh; this.size = sz; this.handle = h; this.quantity = 1; this.price =10.00; this.tprice = this.price;
            this.setMat = function(mat){
                this.material = mat;
                if(mat == 'Sable')
                    this.price = 10.00;
                else if(mat == 'Nylon')
                    this.price = 8.00;
                else
                    this.price = 12.00;
            }
            this.setShape = function(shp){
                this.shape = shp;
                if(shp == 'angle')
                    this.tprice = this.price + 1.00;
                else if (shp == 'fan')
                    this.tprice = this.price + 2.00;
            }
            this.setHandle = function(han){
                this.handle = han;
                if(han == 'medium')
                    this.tprice = this.price + 0.50;
                else if(han == 'long')
                    this.tprice = this.price + 0.80;
            }
        }
        var myBrush = new Brush('Sable', 'angle', '000', 'short', 0);

        function Marker(s, c, q){
            var shape; var color; var quantity; var price; var tprice;  this.shape = s;   this.color = c; this.quantity = q;
            this.price = 10.00; this.tprice = this.price;
            this.setShape = function(sh){
                this.shape = sh;
                if (sh == 'brush' || sh == 'point' || sh == 'fine' )
                    this.price = 10.00;
                else
                    this.price = 8.00;
            }
        }
        var myMarker = new Marker('brush', 'black', 0)
    </script>

    <div class='main cont' style='left:24%; align-items: flex-start;'>
        <table class='mainTables' id='store'>
            <tr class='cont' style='background-color: #d8d8d8; margin-bottom: 5%;'>
                <th>Store</th>
            </tr>
            <tr class='cont innercont'>
                <td class='mainTables item mm' id='pencils'>
                    <h1 class='inHead'>Pencils</h1>
                        <form name='Pencil' title='Pencil' style='display: none;'></form>
                    <p style='padding-left: 5%;'>
                        <label>Type</label>
                        <select class='f' name='pencil_type' id='pencil_type' form='Pencil' onchange='setPencilType()'>
                            <option value='Graphite'>Graphite</option>
                            <option value='Ebony'>Ebony</option>
                        </select>
                            <br>
                        <label>Weight</label>
                        <select  class='f' name='pencil_weight' id='pencil_weight' form='Pencil' onchange='setPencilWeight()'>
                            <option value='6H'>6H</option>
                            <option value='5H'>5H</option>
                            <option value='4H'>4H</option>
                            <option value='3H'>3H</option>
                            <option value='2H'>2H</option>
                            <option value='H'>H</option>
                            <option value='HB'>HB</option>
                            <option value='2B'>2B</option>
                            <option value='4B'>4B</option>
                            <option value='6B'>6B</option>
                            <option value='8B'>8B</option>
                        </select>
                            <br>
                        <label>Quantity</label>
                        <input  class='f quantity' type='number' name='pencil_q' id='pencil_q' placeholder='0' form='Pencil' onchange='setPencilQ()' />
                    </p>
                        <div class='pricePrev' id='pencilPrice'></div>
                        <button class='f add' type='submit' form='Pencil' onclick='sendPencil()'>add</button> 

                </td>

                <script type="text/javascript">
                    function setPencilType() {
                        myPencil.setType(document.getElementById('pencil_type').value);
                        myPencil.tprice = myPencil.price * myPencil.quantity;
                            var a = myPencil.tprice;
                            document.getElementById('pencilPrice').innerHTML = '$' + a.toFixed(2);
                    }
                    function setPencilWeight() {
                        myPencil.weight = document.getElementById('pencil_weight').value;
                    }
                    function setPencilQ() {
                        myPencil.quantity = document.getElementById('pencil_q').value;
                        myPencil.tprice = myPencil.price * myPencil.quantity;
                        var a = myPencil.tprice;
                        document.getElementById('pencilPrice').innerHTML = '$' + a.toFixed(2);
                    }
                    function sendPencil(){
                        if (document.getElementById('pencil_q').value > 0){
                            document.getElementById('pencil_q').style = 'background-color: white';
                            var pencilDesc = ' ' + myPencil.quantity + ' ' + myPencil.type + ' pencils, weight ' + myPencil.weight + ' ';
                            addItem(pencilDesc, myPencil.tprice);
                            document.getElementById('pencil_type').value = 'Graphite';
                            document.getElementById('pencil_weight').value = '6H';
                            document.getElementById('pencil_q').value = 0;
                            myPencil.type = 'Graphite';
                            myPencil.weight = '6H';
                            myPencil.quantity = 0;
                            myPencil.tprice = myPencil.price * myPencil.quantity;
                            var a = myPencil.tprice;
                            document.getElementById('pencilPrice').innerHTML = '$' + a.toFixed(2);
                        }
                        else{
                            document.getElementById('pencil_q').style = 'background-color: #ff898d';
                        }
                    }
                </script>




                <td class='mainTables item mm' id='pens'>
                    <h1 class='inHead'>Pens</h1>
                    <p style='padding-left: 5%;'>
                        <label>Type</label>
                        <select class='f' name='pen_type' id='pen_type' form='Pen' onchange='setPenType()'>
                            <option value='Fountain'>Fountain</option>
                            <option value='Ballpoint'>Ballpoint</option>
                            <option value='Fibertip'>Fiber tip</option>
                            <option value='Rollerball'>Roller Ball</option>
                            <option value='Gelink'>Gel Ink</option>
                        </select>
                            <br>
                        <label>Color</label>
                        <select  class='f' name='pen_color' id='pen_color' form='Pen' onchange='setPenColor()'>
                            <option value='black'>black</option>
                            <option value='blue'>blue</option>
                            <option value='red'>red</option>
                            <option value='green'>green</option>
                            <option value='yellow'>yellow</option>
                            <option value='purple'>purple</option>
                            <option value='pink'>pink</option>
                            <option value='orange'>orange</option>
                        </select>
                            <br>
                        <label>Quantity</label>
                        <input  class='f quantity' type='number' name='pen_q' id='pen_q' placeholder='0' onchange='setPenQ()'/>
                    </p>
                        <div class='pricePrev' id='penPrice'>$0.00</div>
                        <button class='f add' type='submit' onclick='sendPen()'>add</button>
                </td>
            </tr>

                <script type="text/javascript">
                    function setPenType() {
                        myPen.setType(document.getElementById('pen_type').value);
                        myPen.tprice = myPen.price * myPen.quantity;
                        var b = myPen.tprice;
                        document.getElementById('penPrice').innerHTML = '$' + b.toFixed(2);
                    }
                    function setPenColor() {
                        myPen.color = document.getElementById('pen_color').value;
                    }
                    function setPenQ() {
                        myPen.quantity = document.getElementById('pen_q').value;
                        myPen.tprice = myPen.price * myPen.quantity;
                        var b = myPen.tprice;
                        document.getElementById('penPrice').innerHTML = '$' + b.toFixed(2);
                    }
                    function sendPen(){
                        if (document.getElementById('pen_q').value > 0){
                            document.getElementById('pen_q').style = 'background-color: white';
                            var penDesc = ' ' + myPen.quantity + ' ' + myPen.type + ' headed pens with ' + myPen.color + ' ink';
                            addItem(penDesc, myPen.tprice);
                            document.getElementById('pen_type').value = 'Fountain';
                            document.getElementById('pen_color').value = 'black';
                            document.getElementById('pen_q').value = 0;
                            myPen.setType('Fountain')
                            myPen.color = 'black';
                            myPen.quantity = 0;
                            myPen.tprice = myPen.price * myPen.quantity;
                            var b = myPen.tprice;
                            document.getElementById('penPrice').innerHTML = '$' + b.toFixed(2);
                        }
                        else{
                             document.getElementById('pen_q').style = 'background-color: #ff898d';
                        }
                    }
                </script>

            <tr class='cont innercont'>
                <td class='mainTables item mm' id='brushes' style='min-width: 40%;'>
                    <h1 class='inHead'>Brushes</h1>
                    <p style='padding-left: 5%;'>
                        <label>Material</label>
                        <select class='f' name='brush_material' id='brush_material' form='Brush' onchange='setBrushMat()'>
                            <option value='Sable'>Sable</option>
                            <option value='Nylon'>Nylon</option>
                            <option value='Bristle'>Bristle</option>
                        </select>
                            <br>
                        <label>Shape</label>
                        <select  class='f' name='brush_shape' id='brush_shape' form='Brush' onchange='setBrushShape()'>
                            <option value='angle'>angle</option>
                            <option value='flat'>flat</option>
                            <option value='round'>round</option>
                            <option value='bright'>bright</option>
                            <option value='filbert'>filbert</option>
                            <option value='fan'>fan</option>
                            <option value='mop'>mop</option>
                            <option value='rigger'>rigger</option>
                        </select>
                            <br>
                        <label>Size</label>
                        <select  class='f' name='brush_size' id='brush_size' form='Brush' onchange='setBrushSize()'>
                            <option value='000'>000</option>
                            <option value='00'>00</option>
                            <option value='0'>0</option>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='5'>5</option>
                            <option value='8'>8</option>
                            <option value='10'>10</option>
                            <option value='14'>14</option>
                            <option value='16'>16</option>
                            <option value='20'>20</option>
                            <option value='26'>26</option>
                            <option value='30'>30</option>
                        </select>
                            <br>
                        <label>Handle</label>
                        <select class='f' name='brush_handle' id='brush_handle' form='Brush' onchange='setBrushHan()'>
                            <option value='short'>short</option>
                            <option value='medium'>medium</option>
                            <option value='long'>long</option>
                        </select>
                        <br>
                    </p>
                        <div class='pricePrev' id='brushPrice'></div>
                        <button class='f add' type='submit' onclick='sendBrush()'>add</button>
                </td>

                <script type="text/javascript">
                    function setBrushMat() {
                        myBrush.setMat(document.getElementById('brush_material').value);
                        document.getElementById('brushPrice').innerHTML = '$' + myBrush.price;
                    }
                    function setBrushShape() {
                        myBrush.setShape(document.getElementById('brush_shape').value);
                        document.getElementById('brushPrice').innerHTML = '$' + myBrush.price;
                    }
                    function setBrushSize() {
                        myBrush.size = document.getElementById('brush_size').value;
                        document.getElementById('brushPrice').innerHTML = '$' + myBrush.price;
                    }
                    function setBrushHan(){
                        myBrush.setHandle(document.getElementById('brush_handle').value);
                        document.getElementById('brushPrice').innerHTML = '$' + myBrush.price;
                    }
                    function sendBrush(){
                        var brushDesc = ' ' + myBrush.handle + ' handled brush with ' + myBrush.material + ', ' + myBrush.shape + ' tuft, size ' + myBrush.size + ' ';
                        addItem(brushDesc, myBrush.price);
                        myBrush.setMat('Sable');
                        myBrush.setShape('angle');
                        myBrush.size = '000';
                        myBrush.setHandle('short');
                        document.getElementById('brush_material').value = 'Sable';
                        document.getElementById('brush_shape').value = 'angle';
                        document.getElementById('brush_size').value = '000';
                        document.getElementById('brush_handle').value = 'short';
                        document.getElementById('brushPrice').innerHTML = '$0.00';
                    }
                </script>


                <td class='mainTables item mm' id='markers'>
                    <h1 class='inHead'>Markers</h1>
                    <p style='padding-left: 5%;'>
                        <label>Shape</label>
                        <select class='f' name='marker_shape' id='marker_shape' form='Marker' onchange='setMarkShape()'>
                            <option value='brush'>brush</option>
                            <option value='point'>point</option>
                            <option value='fine'>fine</option>
                            <option value='angled'>angle</option>
                            <option value='flat'>flat</option>
                            <option value='round'>round</option>
                        </select>
                            <br>
                        <label>Color</label>
                        <select  class='f' id='marker_color' name='marker_color' form='Marker' onchange='setMarkColor()'>
                            <option value='black'>black</option>
                            <option value='grey'>grey</option>
                            <option value='blue'>blue</option>
                            <option value='red'>red</option>
                            <option value='green'>green</option>
                            <option value='yellow'>yellow</option>
                            <option value='purple'>purple</option>
                            <option value='pink'>pink</option>
                            <option value='orange'>orange</option>
                        </select>
                            <br>
                        <label>Quantity</label>
                        <input  class='f quantity' type='number' id='marker_q' name='marker_q' placeholder='0' onchange='setMarkQ()'></input>
                    </p>
                        <div class='pricePrev' id='markerPrice'>$0.00</div>
                        <button class='f add' type='submit' onclick='sendMarker()'>add</button>
                </td>
            </tr>
        </table>
            <script type="text/javascript">
                function setMarkShape() {
                        myMarker.setShape(document.getElementById('marker_shape').value);
                        myMarker.tprice = myMarker.price * myPen.quantity;
                        var e = myMarker.tprice;
                        document.getElementById('markerPrice').innerHTML = '$' + e.toFixed(2);
                    }
                    function setMarkColor() {
                        myMarker.color = document.getElementById('marker_color').value;
                    }
                    function setMarkQ() {
                        myMarker.quantity = document.getElementById('marker_q').value;
                        myMarker.tprice = myMarker.price * myMarker.quantity;
                        var e = myMarker.tprice;
                        document.getElementById('markerPrice').innerHTML = '$' + e.toFixed(2);
                    }
                    function sendMarker(){
                        if (document.getElementById('marker_q').value > 0){
                            document.getElementById('marker_q').style = 'background-color: white';
                            var markDesc = ' ' + myMarker.quantity + ' ' + myMarker.shape + ' tipped '+ myMarker.color+' markers';
                            addItem(markDesc, myMarker.tprice);
                            document.getElementById('marker_shape').value = 'brush';
                            document.getElementById('marker_color').value = 'black';
                            document.getElementById('marker_q').value = 0;
                            myMarker.setShape('brush')
                            myMarker.color = 'black';
                            myMarker.quantity = 0;
                            myMarker.tprice = myMarker.price * myPen.quantity;
                            var e = myMarker.tprice;
                            document.getElementById('markerPrice').innerHTML = '$' + e.toFixed(2);
                        }
                        else {
                            document.getElementById('marker_q').style = 'background-color: #ff898d';
                        }
                    }
            </script>

            <script type="text/javascript">
                var total = 0;
                var numItems = 0;
               function addItem(description, price){
                total = total + price;
                numItems = numItems + 1;
                newRowID = 'item' + numItems;
                    document.getElementById('someitems').innerHTML += '<td class="innercont" id="item'+numItems+'">' + description + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$'+price+'</td>';
                    document.getElementById('cartTotal').innerHTML = 'Total: $' + total.toFixed(2);
               }
            </script>
        <table class='mainTables' id='receipt'>
            <tr class='cont' style='background-color: #d8d8d8; margin-bottom: 5%;'>
                <th >Receipt</th>
            </tr>
            <tr class='flexcol recItem' id='someitems'></tr>


            <tr class='flexcol recItem'>
                <td style='bottom:0;' id='cartTotal'></td>
            </tr>
        </table>
    </div>

    


</body>
</html></html>