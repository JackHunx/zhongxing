<?php
/* @var $this AccountPaymentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Account Payments',
);

$this->menu=array(
	array('label'=>'Create AccountPayment', 'url'=>array('create')),
	array('label'=>'Manage AccountPayment', 'url'=>array('admin')),
);
?>

<h1>Account Payments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
