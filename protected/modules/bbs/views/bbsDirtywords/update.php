<?php
/* @var $this BbsDirtywordsController */
/* @var $model BbsDirtywords */

$this->breadcrumbs=array(
	'Bbs Dirtywords'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BbsDirtywords', 'url'=>array('index')),
	array('label'=>'Create BbsDirtywords', 'url'=>array('create')),
	array('label'=>'View BbsDirtywords', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BbsDirtywords', 'url'=>array('admin')),
);
?>

<h1>Update BbsDirtywords <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>