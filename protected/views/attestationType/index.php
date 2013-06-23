<?php
/* @var $this AttestationTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Attestation Types',
);

$this->menu=array(
	array('label'=>'Create AttestationType', 'url'=>array('create')),
	array('label'=>'Manage AttestationType', 'url'=>array('admin')),
);
?>

<h1>Attestation Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
