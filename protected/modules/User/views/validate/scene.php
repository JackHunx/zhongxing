<?php if($info['vip_status']!=1)
{   ?>
		<div class="user_help">你还不是VIP会员不能做现场认证。</a>
		<div class="c">
			如要申请成为VIP会员，请点按钮提交到VIP申请页。<input type="button" onclick="javacript:location.href='<?php echo Yii::app()->baseUrl;?>/index.php?r=User/validate/vip'" value="申请VIP会员"  /><br /><br /></form>

			</div>
		</div>
<?php }elseif($info['scene_status']==1){?>
		
		<div class="user_help">您已经通过了视频认证</div>
        <?php }else{?>
		
		<div class="user_help">
        <?php if($info['scene_status']!=0){?>
		您的现场认证已经提交，客服人员会及时的跟你联系。</font>。
        <?}else{?>
        欢迎进行现场认证。<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
				<input type="hidden" name="scene" value="2" />
				如果你需要现场认证，请点按钮提交。<input type="submit" value="提交申请" name="submit" />

			</div>
		</div><?php }?></div>
		<?php }?>