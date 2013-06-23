<?php
/* @var $this AccountPaymentController */
/* @var $model AccountPayment */

$this->breadcrumbs=array(
	'Account Payments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountPayment', 'url'=>array('index')),
	array('label'=>'Manage AccountPayment', 'url'=>array('admin')),
);
?>

<h1>Create AccountPayment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>