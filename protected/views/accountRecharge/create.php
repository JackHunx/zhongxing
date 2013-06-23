<?php
/* @var $this AccountRechargeController */
/* @var $model AccountRecharge */

$this->breadcrumbs=array(
	'Account Recharges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountRecharge', 'url'=>array('index')),
	array('label'=>'Manage AccountRecharge', 'url'=>array('admin')),
);
?>

<h1>Create AccountRecharge</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>