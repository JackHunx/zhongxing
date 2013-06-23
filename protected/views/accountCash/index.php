<?php
/* @var $this AccountCashController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Account Cashes',
);

$this->menu=array(
	array('label'=>'Create AccountCash', 'url'=>array('create')),
	array('label'=>'Manage AccountCash', 'url'=>array('admin')),
);
?>

<h1>Account Cashes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
