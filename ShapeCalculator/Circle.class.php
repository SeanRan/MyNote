<?php
include 'Shape.class.php';
class Circle extends Shape{
	private $radius;
	//赋初值
	function __construct($radius=0){
		$this->radius = $radius;
		$this->Shape_name = "Circle";
	}
	//circumference=2πr
	//π值表示为 pi() 或M_PI常量 float精度默认14位 可到php.ini中的precision属性修改
	function circumference(){
		return 2*M_PI*$this->radius;
	}
	//circle's area=πrr
	function area(){
		return pi()*pow($this->radius, 2);
	}
	//post form
	function view(){
		$form = "<form action='index.php?action=Circle' method='post'>";
		$form .= $this->Shape_name."'s radius:<input type='text' name='radius'/><br/><br/>";
		$form .= "<input type='submit' value='calculate'/><br/><br/>";
		$form .= "</form>";
		echo $form;	
	}
}