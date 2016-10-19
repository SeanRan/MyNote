<?php
include 'Shape.class.php';
class Rectangle extends Shape{
	private $width;
	private $height;
	public function __construct($width=0,$height=0){
		$this->Shape_name = "Rectangle";
		$this->width = $width;
		$this->height = $height;
	}
	//circumference
	public function circumference(){
		//Rectangle's circumference=(width+height)*2
		return ($this->width+$this->height)*2;
	}
	//area
	public function area(){
		//Rectangle's area=widht*height;
		return round($this->width*$this->height,7);
	}
	//post form
	public function view(){
		$form = "<form action='index.php?action=Rectangle' method='post'>";
		$form .= $this->Shape_name."'s width:<input type='text' name='width'/><br/><br/>";
		$form .= $this->Shape_name."'s height:<input type='text' name='height'/><br/><br/>";
		$form .= "<input type='submit' value='calculate'/><br/><br/>";
		$form .= "</form>";
		echo $form;	
	}
}