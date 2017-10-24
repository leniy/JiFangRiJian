<?php
class Image{
	//图片压缩操作类 v1.0，网上搜的
	private $src;
	private $image;
	public $imageinfo;
	public  $percent = 0.1;
	public function __construct($src){
		$this->src = $src;
	}
	public function openImage(){
		list($width, $height, $type, $attr) = getimagesize($this->src);
		$this->imageinfo = array(
			'width'=>$width,
			'height'=>$height,
			'type'=>image_type_to_extension($type,false),
			'attr'=>$attr
		);
		$fun = "imagecreatefrom".$this->imageinfo['type'];
		$this->image = $fun($this->src);
	}
	public function thumpImage(){
		$new_width = $this->imageinfo['width'] * $this->percent;
		$new_height = $this->imageinfo['height'] * $this->percent;
		$image_thump = imagecreatetruecolor($new_width,$new_height);
		//将原图复制带图片载体上面，并且按照一定比例压缩,极大的保持了清晰度
		imagecopyresampled($image_thump,$this->image,0,0,0,0,$new_width,$new_height,$this->imageinfo['width'],$this->imageinfo['height']);
		imagedestroy($this->image);	
		$this->image = 	$image_thump;
	}
	public function showImage(){
		header('Content-Type: image/'.$this->imageinfo['type']);
		$funcs = "image".$this->imageinfo['type'];
		$funcs($this->image);
	}
	public function saveImage(){
		$funcs = "image".$this->imageinfo['type'];
		$funcs($this->image,'./thumbs/'.md5($this->src).'.'.$this->imageinfo['type']);
	}
	public function __destruct(){
		imagedestroy($this->image);
	}
}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
img {
    width: 50px;
    height: 50px;
}
select {
	width: "100%";
}
</style>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/jquery.lazyload.min.js?v=1.9.7"></script>
</head>
<body>
<a href="http://jifangrijian.leniy.org/">返回首页</a> | <a href="http://jifangrijian.leniy.org/calendar/index.php">选择日期</a> <br /><br />
<?php
function getfilecounts($dir){
	$handle = opendir($dir);
	$i = 0;
	while(false !== $file=(readdir($handle))){if($file !== '.' && $file != '..'){$i++;}}
	closedir($handle);
	return $i;
}
function yasuotupian($source){
	$image = new Image($source);
	$image->openImage();
	$dest = md5($source).".".$image->imageinfo['type'];
	if (!file_exists('./thumbs/'.$dest)) {
		$image->thumpImage();
		$image->saveImage();
	}
	return 'thumbs/'.$dest;
}
$path = "../uploads/".$_GET['date'];
echo '<p style="font-size: 1.5em;color: red;font-weight: bold;margin: 10px 0;">'.$_GET['date'].'上传了'.getfilecounts($path)."幅日检图片</p>";
echo '<p style="font-size: 0.5em;color: #3F51B5;font-weight: bold;margin: 10px 0;">每天日检照片上百MB，我压缩了，原图路径在页面源文件中^_^</p>';
echo '<p style="color: red;font-weight: bold;margin: 10px 0;">注意，平时把截图发到群里，但是有告警的时候，需要把对应的大图发到群里</p>';
$items = new RecursiveDirectoryIterator($path);
foreach($items as $itemName => $item) if('.' != substr((string)$itemName,-1)) echo '<img data-original="'.(string)yasuotupian($itemName).'" yuansitupian="'.(string)$itemName.'" />', PHP_EOL;
?>
  <script type="text/javascript" charset="utf-8">
  $(function() {
     $("img").lazyload({
         effect : "fadeIn"
     });

  });
  </script>
</body></html>
