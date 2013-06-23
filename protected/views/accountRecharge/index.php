<?php
/* @var $this AccountRechargeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Account Recharges',
);

$this->menu=array(
	array('label'=>'Create AccountRecharge', 'url'=>array('create')),
	array('label'=>'Manage AccountRecharge', 'url'=>array('admin')),
);
?>

<h1>Account Recharges</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
