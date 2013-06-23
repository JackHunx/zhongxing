<?php
/* @var $this BbsCreditsController */
/* @var $model BbsCredits */

$this->breadcrumbs=array(
	'Bbs Credits'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BbsCredits', 'url'=>array('index')),
	array('label'=>'Create BbsCredits', 'url'=>array('create')),
	array('label'=>'View BbsCredits', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BbsCredits', 'url'=>array('admin')),
);
?>

<h1>Update BbsCredits <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>