<?php
date_default_timezone_set("Asia/Chongqing");
/*做一个到程序员日的倒计时，距离目标时间大于一天时，以天计；仅有一天时，以小时计，节日当天，向浏览器输出happy1024*/
$pf = strtotime("20161024");
$now = time();
// $now = strtotime("20161025"); this is a test line
$difference = $pf-$now;
if ($difference>86400) {
	echo "距离程序元日还有".floor($difference/86400)."天";
}else{
	if($difference<=86400&&$difference>0){
		$difh = floor($difference/3600);
		$difi = floor(($difference%3600)/60);
		$difs = $difference%3600%60;
		echo "距离程序员日只有&nbsp;".$difh."小时".$difi."分".$difs."秒了！";
	}else{
	echo "Happy 1024!";
}
}
