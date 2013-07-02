
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
<script type="text/javascript">
		//允许上传的图片类型
		var extensions = '<?php echo $config['extensions']; ?>';
		//保存缩略图的地址.
		var saveUrl = '<?php echo $config['saveUrl']; ?>';
		//保存摄象头白摄图片的地址.
		var cameraPostUrl = '<?php echo $config['cameraPostUrl']; ?>';
		//头像编辑器flash的地址.
		var editorFlaPath = '<?php echo $config['editorFlaPath']; ?>';

		function useCamera()
		{
			var content = '<embed height="464" width="514" ';
			content +='flashvars="type=camera';
			content +='&postUrl='+cameraPostUrl+'?&radom=1';
			content += '&saveUrl='+saveUrl+'?radom=1" ';
			content +='pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" ';
			content +='allowscriptaccess="always" quality="high" ';
			content +='src="'+editorFlaPath+'"/>';
			document.getElementById('avatar_editor').innerHTML = content;
		}
		function buildAvatarEditor(pic_id,pic_path,post_type)
		{
			var content = '<embed height="464" width="514"'; 
			content+='flashvars="type='+post_type;
			content+='&photoUrl='+pic_path;
			content+='&photoId='+pic_id;
			content+='&postUrl='+cameraPostUrl+'?&radom=1';
			content+='&saveUrl='+saveUrl+'?radom=1"';
			content+=' pluginspage="http://www.macromedia.com/go/getflashplayer"';
			content+=' type="application/x-shockwave-flash"';
			content+=' allowscriptaccess="always" quality="high" src="'+editorFlaPath+'"/>';
			document.getElementById('avatar_editor').innerHTML = content;
		}
			/**
			  * 提供给FLASH的接口 ： 没有摄像头时的回调方法
			  */
			 function noCamera(){
				 alert("您没有安装摄像头,请安装之后再试");
			 }
					
			/**
			 * 提供给FLASH的接口：编辑头像保存成功后的回调方法
			 */
			function avatarSaved(){
		

				//alert(response);
				//alert(data);
				alert('头像上传成功');
				//window.location.href = '/profile.do';
			}
			
			 /**
			  * 提供给FLASH的接口：编辑头像保存失败的回调方法, msg 是失败信息，可以不返回给用户, 仅作调试使用.
			  */
			 function avatarError(msg){
				 alert("上传失败,请稍后再尝试上传,或者联系客服人员");
			 }

			 function checkFile()
			 {
				 var path = document.getElementById('Filedata').value;
				 var ext = getExt(path);
				 var re = new RegExp("(^|\\s|,)" + ext + "($|\\s|,)", "ig");
				  if(extensions != '' && (re.exec(extensions) == null || ext == '')) {
				 alert('对不起，只能上传jpg, gif, png类型的图片');
				 return false;
				 }
				 showLoading();
				 return true;
			 }

			 function getExt(path) {
				return path.lastIndexOf('.') == -1 ? '' : path.substr(path.lastIndexOf('.') + 1, path.length).toLowerCase();
			}
              function	showLoading()
			  {
				  document.getElementById('loading_gif').style.visibility = 'visible';
			  }
			  function hideLoading()
			  {
				document.getElementById('loading_gif').style.visibility = 'hidden';
			  }
		</script>

