<?php
	function __autoload($classname){
		include $classname.'.class.php';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shape Calculator</title>
</head>
<body>
<center>
<h1>Shape Calculator</h1><br/><br/>
<a href="index.php?action=Rectangle">Rectangle</a> | <a href="index.php?action=Traingle">Traingle</a> | <a href="index.php?action=Circle">Circle</a><br/><br/>
<?php
	//把actino后的内容赋值给一个变量，便于使用
	$classname = isset($_GET['action'])?$_GET['action']:"";
	//如果用户未选择图形则给出提示，如果选择了则进行计算
	if(!empty($classname)){
		//如果get到了图形，则给出表单，并对用户填写的值进行计算
		//判断get到的是什么图形，给出相应的表单和计算结果
		#rectangle
		$obj = new $classname();
		$obj->view();
		if(($_POST) && $_GET['action']=='Rectangle'){
			$obj = new $classname($_POST['width'],$_POST['height']);
			echo $classname."'s circumference is:".$obj->circumference()."<br/><br/>";
			echo $classname."'s area is:".$obj->area()."<br/><br/>";
		}
		#traingle
			// $obj->view();
		if(($_POST) && $_GET['action']=='Traingle'){
			$obj = new $classname($_POST['side_a'],$_POST['side_b'],$_POST['side_c']);
			echo $classname."'s circumference is:".$obj->circumference()."<br/><br/>";
			echo $classname."'s area is:".$obj->area()."<br/><br/>";
		}
		#circle
			// $obj->view();
		if(($_POST) && $_GET['action']=='Circle'){
			$obj = new $classname($_POST['radius']);
			echo $classname."'s circumference is:".$obj->circumference()."<br/><br/>";
			echo $classname."'s area is:".$obj->area()."<br/><br/>";
		}
	}else{
		echo "<br/>Please choose a Shape.";
	}
	//为了使此calculator更完善，其实还可以做一些页面上的美化以及对边长、半径等参数的条件判定
	//不过那都是一些吃力不讨好的事，就先搁置了
?>
</center>
</body>
</html>