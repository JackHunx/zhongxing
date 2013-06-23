<?php
/* @var $this AccountBankController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Account Banks',
);

$this->menu=array(
	array('label'=>'Create AccountBank', 'url'=>array('create')),
	array('label'=>'Manage AccountBank', 'url'=>array('admin')),
);
?>

<h1>Account Banks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
