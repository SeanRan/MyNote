#codes:
```html
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<input type="checkbox" name="ids[]" checked="true">php
<input type="checkbox" name="ids[]">javascript
<input type="checkbox" name="ids[]">java
<input type="checkbox" name="ids[]">c++
<input type="checkbox" name="ids[]">python
<input type="checkbox" name="ids[]">lisp
<input type="checkbox" name="ids[]">objectC<br>
<script type="text/javascript">
	// alert("hello world");
	var obj = document.getElementsByName("ids[]");
	function selectAll(){
		for(key in obj){
			obj[key].checked=true;
		}
	}
	function selectNone(){
		for(key in obj){
			obj[key].checked=false;
		}
	}
	function selectOther(){
		for(key in obj){
			if(obj[key].checked==true){
				obj[key].checked=false;
			}else{
				obj[key].checked=true;
			}
		}
	}
</script>
<input type="button" name="" onclick="selectAll();" value="selectAll">
<input type="button" name="" onclick="selectNone();" value="selectNone">
<input type="button" name="" onclick="selectOther();" value="selectOther">
</body>
</html>
```
