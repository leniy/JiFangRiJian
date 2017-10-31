<?php
/* Auther: Leniy
 *
 * ┏┓  ┏┓ 
 *┏┛┻━━━┛┻┓ 
 *┃     ┃
 *┃   ━  ┃ 
 *┃ ┳┛ ┗┳ ┃ 
 *┃       ┃ 
 *┃   ┻   ┃ 
 *┃       ┃ 
 *┗━┓   ┏━┛ 
 *  ┃   ┃神兽保佑 
 *  ┃   ┃代码无BUG！
 *  ┃   ┗━━━┓ 
 *  ┃       ┣┓ 
 *  ┃       ┏┛ 
 *  ┗┓┓┏━┳┓┏┛ 
 *   ┃┫┫ ┃┫┫ 
 *   ┗┻┛ ┗┻┛  
 *    
 */
function getfolderlists($dir){
	$templist = [];
	$handle = opendir($dir);
	$i = 0;
	while(false !== $file=(readdir($handle))){if($file !== '.' && $file != '..'){array_push($templist,$file);}}
	return $templist;
}
function getfilecounts($dir){
	$handle = opendir($dir);
	$i = 0;
	while(false !== $file=(readdir($handle))){if($file !== '.' && $file != '..'){$i++;}}
	closedir($handle);
	return $i;
}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/swiper-3.3.1.min.css">
<script src="js/jquery-1.11.0.js"></script>
<script type="text/javascript" src="js/swiper-3.3.1.min.js"></script>
<script type="text/javascript">
function set_xiaohongdian(){
	<?php
	//获取uploads文件夹下面的日期文件夹列表，然后遍历每个子文件夹的图片数量
	$templist_month = getfolderlists("../uploads");//uploads顶级目录
	foreach($templist_month as $bbb){//遍历uploads下面类似201709的这种目录
	$templist_day = getfolderlists("../uploads/".$bbb);//uploads/201709这种目录
	foreach($templist_day as $aaa){//遍历uploads/201709下面的每个20170920这种目录

		$thiscount = getfilecounts("../uploads/".$bbb.'/'.$aaa);
		$thisyear = substr($aaa,0,4);
		$thismonth = substr($aaa,4,2);
		$thisday = substr($aaa,6,2);
		if($thiscount >= 1){
			echo '$("td[data_y='.(int)$thisyear.'][data_m='.(int)$thismonth.'][data_d='.(int)$thisday.']>p").html("'.$thiscount.'");';
			echo '$("td[data_y='.(int)$thisyear.'][data_m='.(int)$thismonth.'][data_d='.(int)$thisday.']").attr("path","'.$aaa.'");';
		}
		if($thiscount >= 21)
			echo '$("td[data_y='.(int)$thisyear.'][data_m='.(int)$thismonth.'][data_d='.(int)$thisday.']>p").css("background-color","green");';
		elseif($thiscount >= 1)
			echo '$("td[data_y='.(int)$thisyear.'][data_m='.(int)$thismonth.'][data_d='.(int)$thisday.']>p").css("background-color","red");';
	}
	}
	?>
}
</script>
</head>
<body>
<div class="loading loading1 covers" ><div class="loading-bj"></div><p>加载中...</p></div>
<section class="out-wrap"  style="height: 100%;">
	<div class="header-main">
		 <section class="header">
			  <div class="child return"><!-- <i></i> --></div>
			  <div class="child date">
				 <em class="f34" id="ymym">2016年06月</em>
				 <i></i> 
			  </div>
		 </section>
		 <section class="day">
				<section class="grid clearfix">
					<div class="day-left clearfix">
						<h1 id="top_shu">20</h1>
						<div class="top-contrl">
							<p><em id="top_week">星期二</em></p>
							<div><i id="top_yue">八月廿十</i></div>
						</div>
					</div>
					<div class="day-right clearfix">
						<div class="yun">
							<span class="js_jin">今</span>
						</div>
					</div>
				</section>
		 </section>
		 <!-- end day -->
	</div>
	<!-- end header -->
	<section class="content">
		<section class="week"><ul class="clearfix f28"><?php foreach (array('日','一','二','三','四','五','六') as &$value) {echo '<li><a href="#">'.$value.'</a></li>';}?></ul></section>
		<section class="calenda">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<table id="now1" class="tables">
							<tr class=""><td class=" list"><p>21</p><i>12</i><em>中秋</em></td></tr>
						</table>
					</div>
					<div class="swiper-slide">
						<table id="now2" class="tables">
							<tr class=""><?php for($i=1;$i<=7;$i++){echo '<td class=" list"><p>21</p><i>12</i><em>中秋</em></td>';}?></tr>
						</table>
					</div>
					<div class="swiper-slide">
						<table id="now3" class="tables">
							<tr class="">
								<td class="list"><i>12</i><em>中秋</em></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
		
		<!-- end calenda -->
	</section>
	<!-- end content -->
	<section class="prorup"></section>
	<!-- 弹窗 -->
	<div class="tc"></div>
	<div class="tc-innner">
		<h2>
		   <!--  <div class="title-right">
				<div class="gl zblck active">公历</div>
				<div class="nl zblck">农历</div>
			</div> -->
			选择日期
		</h2>
		<div class="current-time">
			<i class="i-year">1900</i><i class="i-month">1</i><i class="i-date">1</i>
		</div>
		<div class="swiper-box">
			<i class="i1"></i>
			<i class="i2"></i>
			<i class="i3"></i>
			<div class="swiper-box-li"><div class="swiper-container2 nbxs"><div class="swiper-wrapper year"><?php for($i=1900;$i<=2049;$i++){echo '<div class="swiper-slide">'.$i.'年</div>';}?></div></div></div>
			<div class="swiper-box-li"><div class="swiper-container3 nbxs"><div class="swiper-wrapper month"><?php for($i=1;$i<=12;$i++){echo '<div class="swiper-slide">'.$i.'月</div>';}?></div></div></div>
			<div class="swiper-box-li"><div class="swiper-container4 nbxs"><div class="swiper-wrapper date"><?php for($i=1;$i<=31;$i++){echo '<div class="swiper-slide">'.$i.'日</div>';}?></div></div></div>
		</div>
		<div class="tc-bot">
			<div class="tc-bot-left">回到今天</div>
			<div class="tc-bot-right">确定</div>
			<i></i>
		</div>
	</div>
</section>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/datecount.js"></script>
</body>
</html>
