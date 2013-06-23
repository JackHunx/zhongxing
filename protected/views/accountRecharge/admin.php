<?php
/* @var $this AccountRechargeController */
/* @var $model AccountRecharge */

$this->breadcrumbs=array(
	'Account Recharges'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AccountRecharge', 'url'=>array('index')),
	array('label'=>'Create AccountRecharge', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#account-recharge-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Account Recharges</h1>

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
	'id'=>'account-recharge-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'trade_no',
		'user_id',
		'status',
		'money',
		'payment',
		/*
		'return',
		'type',
		'remark',
		'fee',
		'verify_userid',
		'verify_time',
		'verify_remark',
		'addtime',
		'addip',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
