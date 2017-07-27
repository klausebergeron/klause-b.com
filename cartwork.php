<?php

class cartwork {
	var $id;
	var $num;
	var $title;
	var $source;
	var $type; //original, fxs(5x7), ext(8x10), or llxf(11x14)
	var $price;
	function __construct($id, $title, $source, $type, $price)
	{
		$this->id = $id;
		preg_match('/\d+/', $id, $herp);
		$this->num = $herp[0];
		$this->title = $title;
		$this->source = $source;
		$this->type = $type;
		$this->price = $price;
	}
}


?>