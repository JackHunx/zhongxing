<?php
/* @var $this AccountCashController */
/* @var $model AccountCash */

$this->breadcrumbs=array(
	'Account Cashes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountCash', 'url'=>array('index')),
	array('label'=>'Create AccountCash', 'url'=>array('create')),
	array('label'=>'View AccountCash', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountCash', 'url'=>array('admin')),
);
?>

<h1>Update AccountCash <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>