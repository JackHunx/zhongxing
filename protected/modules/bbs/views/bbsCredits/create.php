<?php
/* @var $this BbsCreditsController */
/* @var $model BbsCredits */

$this->breadcrumbs=array(
	'Bbs Credits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BbsCredits', 'url'=>array('index')),
	array('label'=>'Manage BbsCredits', 'url'=>array('admin')),
);
?>

<h1>Create BbsCredits</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>