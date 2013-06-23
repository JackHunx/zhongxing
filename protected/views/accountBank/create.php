<?php
/* @var $this AccountBankController */
/* @var $model AccountBank */

$this->breadcrumbs=array(
	'Account Banks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountBank', 'url'=>array('index')),
	array('label'=>'Manage AccountBank', 'url'=>array('admin')),
);
?>

<h1>Create AccountBank</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>