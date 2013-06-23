<?php
/* @var $this BorrowCollectionController */
/* @var $model BorrowCollection */

$this->breadcrumbs=array(
	'Borrow Collections'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BorrowCollection', 'url'=>array('index')),
	array('label'=>'Create BorrowCollection', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#borrow-collection-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Borrow Collections</h1>

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
	'id'=>'borrow-collection-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'site_id',
		'status',
		'order',
		'tender_id',
		'repay_time',
		/*
		'repay_yestime',
		'repay_account',
		'repay_yesaccount',
		'interest',
		'capital',
		'late_days',
		'late_interest',
		'addtime',
		'addip',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
