<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/admin');?>
<!--- borrow list -->
	<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="<?php echo Yii::app()->createUrl('admin/borrow/push') ;?>"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/borrow.png" alt="icon" /><br />
					发标待审
				</span></a></li>
                 <li><a class="shortcut-button" href="<?php echo Yii::app()->createUrl('admin/borrow/inviteTender') ;?>"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/account.png" alt="icon" /><br />
					正在招标
				</span></a></li>
				
				
				<li><a class="shortcut-button" href="<?php echo Yii::app()->createUrl('admin/borrow/finish'); ?>"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/xindaishenhe.png" alt="icon" /><br />
					已满标待审
				</span></a></li>
               
				
				
			
				<li><a class="shortcut-button" href="<?php echo Yii::app()->createUrl('admin/borrow/flowStandard');?>"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/tender-48.png" alt="icon" /><br />
					流标
				</span></a></li>
                
                
                
               
				
			</ul>
            
 
  
<!--- end borrow list-->

<?php echo $content;?>

<?php $this->endContent();?>