<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-list',
    'cssFile'=>Yii::app()->baseUrl.'/css/grid_view.css',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
	'columns'=>array(

        'username',
        'realname',
        
        //'email',
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
            'name'=>'card_id',
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
            'value'=>array($this,'realStatus'),
            'type'=>'raw',
        ),
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
            
            'buttons'=>array('update'=>array('imageUrl'=>null,'label'=>'审核')
            ),
            'template'=>'{update}',
            
		),
	),
)); ?>