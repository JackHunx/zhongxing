<?php
/* @var $this VipController */
/* @var $model Vip */

$this->breadcrumbs=array(
	'Vips'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Vip', 'url'=>array('index')),
	array('label'=>'Create Vip', 'url'=>array('create')),
);

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
		'kefu_userid',
		'kefu_username',
		'kefu_addtime',
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
		),
	),
)); ?>
