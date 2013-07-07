{if $_G.user_result.vip_status!=1}
<?php if($info['vip_status']!=1)
{   ?>
		<div class="user_help">你还不是VIP会员不能做视频认证。</a>
		<div class="c">
			如要申请成为VIP会员，请点按钮提交到VIP申请页。<input type="button" onclick="javacript:location.href='/vip/index.html'" value="申请VIP会员"  /><br /><br /></form>

			</div>
		</div>
<?php }elseif($info['video_status']==1){?>
		{elseif $_G.user_result.vedio_status==1}
		<div class="user_help">您已经通过了视频认证</div>
        <?php }else{?>
		{else}
		<div class="user_help">
		{if $_G.user_result.video_status!=0}您的视频认证已经提交，客服人员会及时的跟你联系。</font>。{else}欢迎进行视频认证。<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
				
				{if $_G.user_result.use_money >0}如果你需要视频认证，请点按钮提交。<input type="submit" value="提交申请" name="submit" /><br /><br />{else}<a href="/index.php?user&q=code/account/recharge_new"><font color="#FF0000">请先充值</font></a>{/if}</form>

			</div>
		</div>{/if}</div>
		{/if}}<?php }?>