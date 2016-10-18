#PHP中的单例模式(singleton)  
- 意图：保证一个类只有一个实例，并提供一个访问他的全局访问点——《设计模式》GoF  
- 在php中主要用于数据库类，缓解系统负担，提升运行速度  

---
Example:
```php
<?php
class Singleton{
	public static $obj = null;
	public $name;//应用
	//用private或protected限制构造函数，使其在外部不可被调用(狗仔函数的触发条件是当一个对象被实例化时)
	//既然不想调用他，为何不直接删除？因为要给成员赋初值，所以通常情况下，必需调用一次，也就是，要想办法使该类只被实例化一次
	private function __construct(){
		echo "const\n";
	}
	//用一个静态方法来做一次实例化，并将实例存储到开头的静态属性$obj中用于外部访问
	static function getObj(){
		//此if语句是为了保证只实例化一次Singleton类
		if(is_null(self::$obj)){
			self::$obj = new Singleton;
		}
		//将存有实例的静态属性$obj返回
		//注：此处不用if...else...
		return self::$obj;
	}
	function __destruct(){
		echo "dest\n";
	}
}
//应用
$a = Singleton::getObj();
$b = Singleton::getObj();
$a->name = "Hank\n";
echo $a->name;
```
