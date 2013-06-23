<?php
/* @var $this AccountCashController */
/* @var $model AccountCash */

$this->breadcrumbs=array(
	'Account Cashes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountCash', 'url'=>array('index')),
	array('label'=>'Manage AccountCash', 'url'=>array('admin')),
);
?>

<h1>Create AccountCash</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>