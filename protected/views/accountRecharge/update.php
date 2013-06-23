<?php
/* @var $this AccountRechargeController */
/* @var $model AccountRecharge */

$this->breadcrumbs=array(
	'Account Recharges'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountRecharge', 'url'=>array('index')),
	array('label'=>'Create AccountRecharge', 'url'=>array('create')),
	array('label'=>'View AccountRecharge', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountRecharge', 'url'=>array('admin')),
);
?>

<h1>Update AccountRecharge <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>