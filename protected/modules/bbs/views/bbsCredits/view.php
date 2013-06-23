<?php
/* @var $this BbsCreditsController */
/* @var $model BbsCredits */

$this->breadcrumbs=array(
	'Bbs Credits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BbsCredits', 'url'=>array('index')),
	array('label'=>'Create BbsCredits', 'url'=>array('create')),
	array('label'=>'Update BbsCredits', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BbsCredits', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbsCredits', 'url'=>array('admin')),
);
?>

<h1>View BbsCredits #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'creditscode',
		'creditsname',
		'postvar',
		'replyvar',
		'goodvar',
		'uploadvar',
		'downvar',
		'votevar',
		'isuse',
	),
)); ?>
