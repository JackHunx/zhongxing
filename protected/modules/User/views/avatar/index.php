
		
		<div class="user_right_main">
		
				<!--头像 开始-->
		<div class="user_help">请上传你网站的头像</div>
		
		
        <?php 
        $this->widget('ext.avatar.AvatarUpload',array(
        'id'=>'avatarUpload',
        'config'=>array(
            'extensions'=>'jpg,jpeg,gif,png',
            'saveUrl'=>Yii::app()->getBaseUrl().'/index.php?r=User/avatar/saveAvatar',
            'cameraPostUrl'=>Yii::app()->getBaseUrl().'/index.php?r=User/avatar/camera',
            'editorFlaPath'=>Yii::app()->getBaseUrl().'/images/AvatarEditor.swf'
        ),
        
        ));






 

?>
     
		<div class="user_right_foot">
        
		* 温馨提示：头像现在有二种，大，小
  
		</div>
		<!--头像 结束-->
		
		
		</div>
<!--用户中心的主栏目 结束-->
