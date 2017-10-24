<!DOCTYPE html>
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
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'checkScript'      : 'check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : 'uploadifive.php',
				'onUploadComplete' : function(file, data) { console.log(data); }
			});
		});
	</script>
</body>
</html>
