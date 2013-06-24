<?php
/* @var $this VipController */
/* @var $model Vip */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vip-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vips</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vip-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'user_id',
      // 'User.username',
       array(
        'name'=>'user_search',
        'value'=>'$data->user->username'
       ),
        //'user_name',
		//'kefu_userid',
		'kefu_username',
		//'kefu_addtime',
		'vip_status',
		'vip_remark',
		/*
		'vip_money',
		'vip_verify_remark',
		'vip_verify_time',
		'bbs_topics_num',
		'bbs_posts_num',
		'credit',
		'account',
		'account_use',
		'account_nouse',
		'account_waitin',
		'account_waitintrest',
		'account_intrest',
		'account_award',
		'account_payment',
		'account_expired',
		'account_waitvip',
		'borrow_amount',
		'vouch_amount',
		'borrow_loan',
		'borrow_success',
		'borrow_wait',
		'borrow_paymeng',
		'friends_apply',
		*/
		array(
			'class'=>'CButtonColumn',
            'deleteButtonOptions'=>array('style'=>'display:none'),   
            'updateButtonOptions'=>array('title'=>'审核'),
            
            'buttons'=>array('update'=>array('imageUrl'=>null,'label'=>'审核'),'view'=>array('imageUrl'=>null,'label'=>'查看/')
            ),
            'template'=>'{view}{update}{delete}',
            
		),
	),
)); ?>
