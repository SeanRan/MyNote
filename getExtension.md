#获取文件扩展名的几种方法
1.
    function getExtension($fileName){
      return substr($fileName,strrpos($fileName,".")+1);
    }
2.  
    function getExtension($fileName,$unsigned=false){
      if($unsigned=false){
      	return strrchr($fileName);
      }else{
      	if($unsigned=true){
      	return ltrim(strrchr($fileName,"."),".");
      	}
  	  }
    }
3.
    fuction getExtension($fileName){
      $arr = explode(".",$fileName);
      return end($arr);
    }
