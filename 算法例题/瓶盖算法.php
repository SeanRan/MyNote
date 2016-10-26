<?php
//两元钱可以喝一瓶水，两个空瓶可以换一瓶，四个瓶盖可以换一瓶，10元可以喝几瓶？(不能赊)
$drink = 0;//水
$cover = 0;//瓶盖
$bottle = 0;//空瓶
$money = 10;//钱
for($i=0;$money>=2||$bottle>=2||$cover>=4;$i++){
	if($money>=2){
		$money -= 2;
	}elseif($bottle>=2){
		$bottle -= 2;
	}elseif($cover>=4){
		$cover -= 4;
	}
	$drink++;
	$bottle++;
	$cover++;
}
echo "10元"."可以喝".$drink."瓶水，"."剩余{$bottle}个空瓶和{$cover}个瓶盖";
