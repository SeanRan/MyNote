- html部分：
```html
<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
</head>
<body>
	<form method="post" action="calc.php">
	<input type="text" name="a"/>
	<select name="op">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="%">%</option>
	</select>
	<input type="text" name="b"/>
	<input type="submit" value="calculate"/>
	</form>
</body>
</html>
```
- php部分
```php
<?php
header("content-type:text/html;charset=utf-8");
$a = $_POST['a'];
$b = $_POST['b'];
$op = $_POST['op'];
if(is_numeric($a)&&is_numeric($b)){
	if($op == "+"){
		echo $a+$b;
	}elseif($op == "-"){
		echo $a-$b;
	}elseif($op == "*"){
		echo $a*$b;
	}elseif($op == "/"){
		if($b!=0){
			echo $a/$b;
		}else{
			die('除数不能为0！');
		}
	}elseif($op == "%"){
		if($b!=0){
			echo $a%$b;			
		}else{
			exit('除数不能为0！');
		}
	}
}else{
	echo '请输入合法数字！';
}
```
**效果⬇️**
![](http://ww1.sinaimg.cn/large/005xbErCgw1f8d2t3uhiuj30ap00xa9v.jpg)


