<?php
/* @var $this AccountPaymentController */
/* @var $model AccountPayment */

$this->breadcrumbs=array(
	'Account Payments'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountPayment', 'url'=>array('index')),
	array('label'=>'Create AccountPayment', 'url'=>array('create')),
	array('label'=>'View AccountPayment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountPayment', 'url'=>array('admin')),
);
?>

<h1>Update AccountPayment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>