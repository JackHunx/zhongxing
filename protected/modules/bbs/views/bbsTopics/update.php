<?php
/* @var $this BbsTopicsController */
/* @var $model BbsTopics */

$this->breadcrumbs=array(
	'Bbs Topics'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BbsTopics', 'url'=>array('index')),
	array('label'=>'Create BbsTopics', 'url'=>array('create')),
	array('label'=>'View BbsTopics', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BbsTopics', 'url'=>array('admin')),
);
?>

<h1>Update BbsTopics <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>