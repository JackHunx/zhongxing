<?php
/* @var $this AttestationController */
/* @var $model Attestation */

$this->breadcrumbs=array(
	'Attestations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Attestation', 'url'=>array('index')),
	array('label'=>'Create Attestation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#attestation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Attestations</h1>

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
	'id'=>'attestation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'type_id',
		'name',
		'status',
		'litpic',
		/*
		'content',
		'jifen',
		'pic',
		'pic2',
		'pic3',
		'verify_time',
		'verify_user',
		'verify_remark',
		'addtime',
		'addip',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
