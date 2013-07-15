	<div class="notification attention png_bg">
				<div>
					有<font color = "red"><?php echo $count;?></font>条申请等待审核--<a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=admin/verify/realname&User[real_status]=0">点击审核</a>
				</div>
			</div>  
            
<!--- user list -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-list',
    'cssFile'=>Yii::app()->baseUrl.'/css/grid_view.css',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
	'columns'=>array(

        'username',
        'realname',
       
        //'sex',
        array(
            'header'=>'性别',
            'type'=>'raw',
            'value'=>array($this,'sex'),
        ),
        array(
            'header'=>'民族',
            'type'=>'raw',
            'value'=>array($this,'nation'),
        ),
        array(
            'header'=>"生日",
            'value'=>'$data->birthday',
            'type'=>'raw'
        ),
        array(
            'header'=>'证件类型',
            'value'=>array($this,'cardtype'),
            'type'=>'raw'
        ),
        array(
            'header'=>'证件号码',
            //'name'=>'card_id',
            'value'=>'$data->card_id',
            'type'=>'raw',
        ),
        array(
            'header'=>'籍贯',
            'value'=>array($this,'area'),
            'type'=>'raw',
        ),
        array(
            'header'=>'身份证图片',
            'value'=>array($this,'cardpic'),
            'type'=>'raw',
            
        ),
        array(
            'header'=>'状态',
            //'name'=>'real_status',
            'value'=>array($this,'realStatus'),
            'type'=>'raw',
        ),
        array(
            'header'=>'操作',
             'value'=>array($this,'verify'),
             'type'=>'raw',
        ),
        //array(
//            'header'=>'审核',
//            'class'=>'CButtonColumn',
//            'template'=>'{verify}',
//            'buttons'=>array(
//                    
//                
//                'verify'=>array(
//                    'label'=>'审核',
//                    'url'=>'Yii::app()->createUrl("#message",array("id"=>$data->user_id))',
//                ),
//                ),
//        ),
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
   
	//	array(
//            'header'=>'操作',
//			'class'=>'CButtonColumn',
//            'deleteButtonOptions'=>array('title'=>'删除'),   
//            'updateButtonOptions'=>array('title'=>'修改'),
//            
//            'buttons'=>array('update'=>array('imageUrl'=>null,'label'=>'审核'),
//            'url'=>'test',
//            ),
//            'template'=>'{update}',
//            
//		),
	),
)); ?>