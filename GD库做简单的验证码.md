```php
#创建画布
$img = imagecreatetruecolor(80, 30);
#colors
$bgcolor = imagecolorallocate($img, rand(200,255), rand(200,255), rand(200,255));
#填充
imagefill($img, 0, 0, $bgcolor);
#定义其他需要的color
#干扰
for ($i=0; $i <10 ; $i++) {
	# code...
	$randcolor = imagecolorallocate($img, rand(100,200), rand(100,200), rand(100,200));
	imageline($img, rand(0,80), rand(0,30), rand(0,80), rand(0,30), $randcolor);
}
for ($i=0; $i <100 ; $i++) {
	# code...
	$randcolor = imagecolorallocate($img, rand(100,200), rand(100,200), rand(100,200));
	imagesetpixel($img, rand(0,80), rand(0,30), $randcolor);
}
#验证码库
$codestring = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMN";
for ($i=0; $i <4 ; $i++) {
	# code...
	$code = substr($codestring, rand(0,strlen($codestring)-1),1);
	$codecolor = imagecolorallocate($img, rand(0,100), rand(0,100), rand(0,100));//code's color rand
	// imagettftext($img, 25, rand(0,30), $i*20+5, rand(20,25) , $codecolor, "../fonts/arial.ttf", $code);
	imagestring($img, 5, $i*20+5, rand(5,10), $code, $codecolor);
}
#配置
header("content-type:image/gif");
imagegif($img);
#释放
imagedestroy($img);
```
