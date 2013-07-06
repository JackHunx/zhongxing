<form action="" name="form1" method="post" >
		<!--个人资料 开始-->
			<div class="user_right_border">
				<div class="l">帐户：</div>
				<div class="c">
				<?php echo $user->email ?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">帐号保护：</div>
				<div class="c">
					交易密码设置 | 申请密码保护 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">昵 称：</div>
				<div class="c">
					<?php echo $user->username ;?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">性 别：</div>
				<div class="c">
					<?php echo ($user->sex==1)?'男':'女';?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">手机号码：</div>
				<div class="c">
					<?php echo $user->phone;?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">籍贯：</div>
				<div class="c">
					<?php echo $area;?>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">婚姻状况：</div>
				<div class="c">
					<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[marry]&type=1&value=<?php echo $info->marry;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">子 女：</div>
				<div class="c">
					<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[child]&type=2&value=<?php echo $info->child;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">学 历：</div>
				<div class="c">
					<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[education]&type=3&value=<?php echo $info->education;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">月收入：</div>
				<div class="c">
					<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[income]&type=4&value=<?php echo $info->income;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">社 保：</div>
				<div class="c">
						<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[shebao]&type=5&value=<?php echo $info->shebao;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">社保电脑号：</div>
				<div class="c">
					<input type="text" size="30" name="info[shebaoid]" value="<?php echo $info->shebaoid;?>" /> 
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">住房条件：</div>
				<div class="c">
						<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[housing]&type=6&value=<?php echo $info->housing;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">是否购车：</div>
				<div class="c">
						<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[car]&type=7&value=<?php echo $info->car;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
				<div class="l">逾期记录：</div>
				<div class="c">
						<script src="<?php echo Yii::app()->baseUrl;?>/index.php?r=getDropValue/drop&name=info[late]&type=8&value=<?php echo $info->late;?>"></script>
				</div>
			</div>
			
			<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		<!--个人资料 结束-->
        </form>