<?php
/* @var $this BorrowRepaymentController */
/* @var $model BorrowRepayment */

$this->breadcrumbs=array(
	'Borrow Repayments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BorrowRepayment', 'url'=>array('index')),
	array('label'=>'Create BorrowRepayment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#borrow-repayment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Borrow Repayments</h1>

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
	'id'=>'borrow-repayment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'site_id',
		'status',
		'webstatus',
		'order',
		'borrow_id',
		/*
		'repayment_time',
		'repayment_yestime',
		'repayment_account',
		'repayment_yesaccount',
		'late_days',
		'late_interest',
		'interest',
		'capital',
		'forfeit',
		'reminder_fee',
		'addtime',
		'addip',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
