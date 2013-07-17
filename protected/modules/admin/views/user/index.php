<div class="notification attention png_bg">
				
				<div>
					有xx条申请等待审核<a href="">点击审核</a>
				</div>
			</div>

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
