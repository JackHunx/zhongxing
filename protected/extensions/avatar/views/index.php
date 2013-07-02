
<div style="width:600px;margin:0 auto;">
	<div>
		<h3 style="font-size:16px;padding:5px;border-bottom:solid 1px #ccc;">头像上传</h3>
		<div style="padding:10px 0;color:#666;">
		上传一张照片作为你的头像,例如上传你身份证上的照片  <a style="color:#cc3300;" href="javascript:void(0);" onclick="useCamera()">您也可以使用摄像头</a>
		</div>
		<form enctype="multipart/form-data" method="post" name="upform" target="upload_target" action="index.php?r=User/avatar/upload">
		<input type="file" name="Filedata" id="Filedata"/>
		<input style="margin-right:20px;" type="submit" name="" value="上传形象照" onclick="return checkFile();" /><span style="visibility:hidden;" id="loading_gif"><img src="<?php echo $baseUrl; ?>./loading.gif" align="absmiddle" />上传中，请稍侯......</span>
		</form>
		<iframe src="about:blank" name="upload_target" style="display:none;"></iframe>
		<div id="avatar_editor"></div>
	
	</div>
</div>

