<?php
include 'Shape.class.php';
class Traingle extends Shape{
	private $side_a;
	private $side_b;
	private $side_c;
	//赋初值
	function __construct($side_a=0,$side_b=0,$side_c=0){
		$this->Shape_name = "Traingle";
		$this->side_a = $side_a;
		$this->side_b = $side_b;
		$this->side_c = $side_c;
	}
	//circumference=a+b+c
	function circumference(){
		return $this->side_a+$this->side_b+$this->side_c;
	}
	//area=sqrt(p*(p-a)*(p-b)*(p-c)) p=cir/2
	function area(){
		$p = ($this->side_a+$this->side_b+$this->side_c)/2;
		return round(sqrt($p*($p-$this->side_a)*($p-$this->side_b)*($p-$this->side_c)),7);
	}
	//post form
	function view(){
		$form = "<form action='index.php?action=Traingle' method='post'>";
		$form .= $this->Shape_name."'s side1:<input type='text' name='side_a'/><br/><br/>";
		$form .= $this->Shape_name."'s side2:<input type='text' name='side_b'/><br/><br/>";
		$form .= $this->Shape_name."'s side3:<input type='text' name='side_c'/><br/><br/>";
		$form .= "<input type='submit' value='calculate'/><br/><br/>";
		$form .= "</form>";
		echo $form;	
	}
}