	<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/image_add_48.png" alt="icon" /><br />
					发标待审
				</span></a></li>
                 <li><a class="shortcut-button" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/account"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/account.png" alt="icon" /><br />
					正在招标
				</span></a></li>
				
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/xindaishenhe.png" alt="icon" /><br />
					已满标待审
				</span></a></li>
               
				
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/clock_48.png" alt="icon" /><br />
					满标审核
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					流标
				</span></a></li>
                <li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					已还款
				</span></a></li>
                <li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					逾期
				</span></a></li>
                
                
               
				
			</ul>
            
 <div class="content-box column-left">
				
				<div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
					
					<h3></h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				      	<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/image_add_48.png" alt="icon" /><br />
					发标待审
				</span></a></li>
                 <li><a class="shortcut-button" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/account"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/account.png" alt="icon" /><br />
					正在招标
				</span></a></li>
				
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/xindaishenhe.png" alt="icon" /><br />
					已满标待审
				</span></a></li>
               
				
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/clock_48.png" alt="icon" /><br />
					满标审核
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					流标
				</span></a></li>
                <li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					已还款
				</span></a></li>
                <li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					逾期
				</span></a></li>
                
                
               
				
			</ul>
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
            
            
   <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-list',
    'cssFile'=>Yii::app()->baseUrl.'/css/grid_view.css',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
	'columns'=>array(
		'user_id',
        'username',
        'realname',
        array(
            'name'=>'islock',
            'type'=>'raw',
            'value'=>array($this,'islock'),
        ),
        'email',
        //'sex',
        array(
            'name'=>'sex',
            'type'=>'raw',
            'value'=>array($this,'sex'),
        ),
        'phone',
        'qq',
      // 'User.username',
       //array(
//        'username'=>'user_search',
//        'value'=>'$data->user->username'
//       ),
//        
//		'kefu_username',
//		
//        array(
//        'name'=>'vip_status',
//        'type'=>'raw',
//        'value'=>array($this,'vipStatus'),
//        ),
//		
//		'vip_remark',
		
		array(
			'class'=>'CButtonColumn',
            'deleteButtonOptions'=>array('title'=>'删除'),   
            'updateButtonOptions'=>array('title'=>'修改'),
            
            'buttons'=>array('update'=>array('imageUrl'=>null,'label'=>'修改-'),'view'=>array('imageUrl'=>null,'label'=>'查看-'),'delete'=>array('imageUrl'=>null,'label'=>'删除')
            ),
            'template'=>'{view}{update}{delete}',
            
		),
	),
)); ?>