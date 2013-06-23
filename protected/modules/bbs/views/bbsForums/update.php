<?php
/* @var $this BbsForumsController */
/* @var $model BbsForums */

$this->breadcrumbs=array(
	'Bbs Forums'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BbsForums', 'url'=>array('index')),
	array('label'=>'Create BbsForums', 'url'=>array('create')),
	array('label'=>'View BbsForums', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BbsForums', 'url'=>array('admin')),
);
?>

<h1>Update BbsForums <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>