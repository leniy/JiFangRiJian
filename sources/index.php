<?php
/** 
 * 作者：Leniy
 * 日期：2017-09-20
 * 佛曰：
 *         写字楼里写字间，写字间里程序员；
 *         程序人员写程序，又拿程序换酒钱。
 *         酒醒只在网上坐，酒醉还来网下眠；
 *         酒醉酒醒日复日，网上网下年复年。
 *         但愿老死电脑间，不愿鞠躬人世间；
 *         奔驰宝马贵者趣，公交自行程序员。
 *         别人笑我忒疯癫，我笑自己命太贱；
 *         不见满街漂亮妹，哪个归得程序员？
 *
 *	  .k@B@B@@@B@B@B@B@@@B@B@B@B@B@@@B@@@B@@@B@B@B@B@B@B@B@B@B@B@B@@@B@B@B@Mu  
 *	 7@@@@@@B@@@B@B@B@B@B@B@B@B@B@B@B@B@B@B@@@@@B@@@@@B@B@@@@@B@B@B@B@B@B@@@B@ 
 *	G@@BBP8GOG8G80Ek5LLvLvLJqqNuYLuXZG8GOGO88Z8GOGOZO8OG8ZOGOGGEE00NNqPSkPX@@@@
 *	B@@@              ,ir7r.    .i                                         vB@@
 *	@B@@.        .JM@B@B@B@B: EB@B@7                           .i:rLSZB@@0 7@B@
 *	B@@@.     rB@@@@B@@@@@BO  B@B@BM,::i::.,..             .1@B@@@B@B@B@B@ 7B@B
 *	@B@@.  ,NB@B@B@B@BNPN7    @B@B@B@B@B@B@B@B@B@@@B@B@7  7B@B@B@B@B@@@@@i Y@@@
 *	@@B@  B@B@B@BBJ,          B@@@@@B@B@B@@@@@B@B@B@B@BZ  B@B@@@MOqFvr:    UB@B
 *	@@@B r@B@B@Y              @B@B@M5Sq0OOMMBB@B@B@@@Z:   @B@B@B           U@B@
 *	B@B@  LEj.                B@B@Bv                      B@B@B@L          1@@@
 *	@B@B.       vqBB@B@@@B@B@B@B@B@BNZOZOZOGO0Z0ZNE0Z8MB5 E@@B@B@B@@@B@Bk  u@B@
 *	B@B@.    0B@B@B@B@B@@@B@@@B@B@B@@@B@B@B@B@B@@@B@@@B@B5 @B@B@B@B@@@B@Bu UB@@
 *	@@@@.  S@B@B@B@B@B@B@B@B@B@B@B@B@B@B@@@B@B@B@B@B@B@@G   uB@B@@@B@B@BX  U@B@
 *	B@B@  @@B@B@v.           ,B@B@@q                              .:ir,    2B@B
 *	@B@B  @@@B@.              @B@B@7    .:iir;rrrrrri::.                   U@@@
 *	B@@@ i@@B@BXXGGOGZqqFP5U: B@B@@@O@B@B@@@B@B@B@@@B@B@@i    7MB@B@B@q    1@@@
 *	@B@@ :@B@@@B@B@B@B@B@@@B@B@@@B@B@B@@@B@B@B@@@B@B@B@B@.  YB@B@B@B@B@B.  U@B@
 *	B@B@ i@@B@B@B@@@B@B@B@B@B@B@B@@@@B8qJLrrr7r7r7rvUEFi   iB@B@B@B@B@B@B  2B@B
 *	@B@B i@B@B@;  ..:::i;iEB@B@B@@@BL                      @@B@BN  v@B@@@J Y@@@
 *	B@B@  B@B@BE            L@B@B@B@B@Mj;rr7rrrrrrr7rr:   :@B@B@    B@B@@M J@@@
 *	@@@B  @B@B@B@B@B@B@O1     :B@B@B@B@B@B@B@B@B@B@B@@@Bk vB@@@@    M@@@@B 7@@@
 *	B@B@.  BB@B@B@B@@@B@B@    B@B@@@B@B@B@B@@@B@B@@@B@B@B i@B@@@    5@@@@@ rB@@
 *	@B@B.    rkO@B@@@@@B@Bi  M@B@B@  :vvvvLvLvLvv7iZ@B@B@ iB@@@B    iB@@@B i@@@
 *	B@B@.     :ur   7@B@@@:  @B@@@B                GB@B@@ L@@@B@    .@B@@@ iB@B
 *	@B@B,   BB@@@X  :B@B@B:  J@B@B@B@@@B@B@B@B@B@B@B@B@B. M@@@@B    .@@@@B i@B@
 *	B@@@.   B@B@B@  i@@@B@,   B@B@B@B@B@B@@@B@@@B@B@B@B.  M@B@B@    .@@@B@ iB@@
 *	@B@B,   iB@B@@u iB@@@B:    ,EB@B@B@@@B@B@B@@@@B0L     MB@B@@    ,B@B@@ i@B@
 *	B@B@.    @B@B@B :@B@@@,             B@B@@X            B@B@@O    .@B@@@ iB@B
 *	@B@B,    8@@@@@ :@@B@B:             @B@B@u            @B@B@v    .B@B@@ i@B@
 *	B@B@.    7@@B@B .@B@B@,      iJXZ8EZ@@B@B@5N0ENEEGOU  B@B@@;    .@B@B@ i@@B
 *	@B@B,    q@B@B@ :@@B@B:   iB@@@B@@@B@B@B@@@B@B@B@B@BZ @B@B@i    .@@B@B i@B@
 *	B@B@.   :@B@B@J i@B@B@,  PB@B@B@B@B@B@B@B@@@@@B@B@B@  @@B@@r    :@B@B@ rB@@
 *	@@@B.  7@@@B@M  rB@B@@, i@@@@Bu,:,,:@B@B@O::iiii;:.   @@@@@i    YB@@@@ 7@@@
 *	B@B@. v@B@@@q   r@B@B@. B@B@@@      B@B@BF            B@B@Bi    u@B@B@ 7B@B
 *	@B@@. kB@B@Y    uB@B@B  @B@@@B:     @B@B@U            @B@B@i    5B@B@B 7@B@
 *	B@B@.  .,       u@B@B@  7@B@B@B@B@@@B@@@@@2N0E0EEG7   @@B@@i    0@@@B@ vB@B
 *	@B@@.           vB@B@B   k@@@B@B@B@B@B@B@B@@@B@B@@@r  @@@B@i    OB@B@@ v@@@
 *	B@@@.  LZBMMGN1jM@@@@@     LE@B@B@B@B@@@B@@@B@@@B@E  .B@B@@v    M@@@B@ YB@@
 *	@B@B .@@@B@B@B@B@@@B@B             u@B@B@L:i;i;;:     @B@B@u    @B@B@@ L@B@
 *	B@B@ ,B@B@B@B@B@B@B@G              rB@B@B             B@B@0     :@B@k  U@@B
 *	@B@B   ....:iir;ri,                 q@Mv                               L@B@
 *	@@B@                                                                   u@@B
 *	2@@B@B@B@B:B@B@B:JjO@@vr@L@B@:@@GrBrqB@B@BMj:1@@@ruu@B@B7i@B@@:G@v@B@B@B@B@
 *	  G@B@B@B@ OB@B@ uu@B@ 72 B@B B@BO OB@B@B@@@ @@@B,L M@Bi:i.@B@ 0. B@B@B@BX 
*/
// Set the upload directory
$dir1 = 'uploads';
$dir2 = 'uploads/'.date("Ym");
$dir3 = 'uploads/'.date("Ym").'/'.date("Ymd");
if (!file_exists($dir1)) mkdir($dir1,0755,true);
if (!file_exists($dir2)) mkdir($dir2,0755,true);
if (!file_exists($dir3)) mkdir($dir3,0755,true);
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="uploadifive/jquery.min.js"></script>
<script type="text/javascript" src="uploadifive/jquery.uploadifive.min.js"></script>
<link rel="stylesheet" type="text/css" href="uploadifive/uploadifive.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
.uploadifive-button {
	float: left;
	margin-right: 10px;
}
#queue {
    border: 1px solid #E5E5E5;
    height: 377px;
    overflow: auto;
    margin-bottom: 10px;
    padding: 0 3px 3px;
    width: auto;
}
h1 {
	text-align: center;
}
.somebtn {
	height: 30px;
    line-height: 30px;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 100px;
	text-decoration: none;
}
</style>
</head>
<body>
	<h1>机房日检上传</h1>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
		<a class="uploadifive-button somebtn" href="javascript:$('#file_upload').uploadifive('upload')">开始上传</a>
		<a class="uploadifive-button somebtn" href="calendar/index.php">查看已有日检图片</a>
	</form>
	<script type="text/javascript">
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'checkScript'      : 'uploadifive/check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php $timestamp = time(); echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : 'uploadifive/uploadifive.php',
				'onUploadComplete' : function(file, data) { console.log(data); }
			});
		});
	</script>
</body>
</html>
