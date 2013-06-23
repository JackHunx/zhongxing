<?php
/* @var $this BbsTopicsController */
/* @var $model BbsTopics */

$this->breadcrumbs=array(
	'Bbs Topics'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BbsTopics', 'url'=>array('index')),
	array('label'=>'Create BbsTopics', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bbs-topics-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bbs Topics</h1>

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
	'id'=>'bbs-topics-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fid',
		'user_id',
		'status',
		'username',
		'name',
		/*
		'content',
		'posttime',
		'edittime',
		'ordertime',
		'last_replytime',
		'last_replyuser',
		'last_replyusername',
		'type',
		'posts_num',
		'hits',
		'islock',
		'isgood',
		'istop',
		'isalltop',
		'stamp',
		'isrecycle',
		'credit',
		'verifystate',
		'verifydesc',
		'isresolved',
		'attachicon',
		'highlight',
		'addtime',
		'addip',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
