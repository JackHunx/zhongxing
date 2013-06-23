<?php
/* @var $this AttestationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Attestations',
);

$this->menu=array(
	array('label'=>'Create Attestation', 'url'=>array('create')),
	array('label'=>'Manage Attestation', 'url'=>array('admin')),
);
?>

<h1>Attestations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
