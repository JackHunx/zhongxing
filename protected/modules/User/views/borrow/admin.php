<?php
/* @var $this BorrowController */
/* @var $model Borrow */

$this->breadcrumbs=array(
	'Borrows'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Borrow', 'url'=>array('index')),
	array('label'=>'Create Borrow', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#borrow-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Borrows</h1>

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
	'id'=>'borrow-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'site_id',
		'user_id',
		'name',
		'status',
		'order',
		/*
		'hits',
		'litpic',
		'flag',
		'is_vouch',
		'type',
		'view_type',
		'vouch_award',
		'vouch_user',
		'vouch_account',
		'vouch_times',
		'source',
		'publish',
		'customer',
		'number_id',
		'verify_user',
		'verify_time',
		'verify_remark',
		'repayment_user',
		'forst_account',
		'repayment_account',
		'monthly_repayment',
		'repayment_yesaccount',
		'repayment_yesinterest',
		'repayment_time',
		'repayment_remark',
		'success_time',
		'end_time',
		'payment_account',
		'each_time',
		'use',
		'time_limit',
		'style',
		'account',
		'account_yes',
		'tender_times',
		'apr',
		'lowest_account',
		'most_account',
		'valid_time',
		'award',
		'part_account',
		'funds',
		'is_false',
		'open_account',
		'open_borrow',
		'open_tender',
		'open_credit',
		'content',
		'addtime',
		'addip',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
