<?php
/* @var $this AttestationController */
/* @var $model Attestation */

$this->breadcrumbs=array(
	'Attestations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Attestation', 'url'=>array('index')),
	array('label'=>'Manage Attestation', 'url'=>array('admin')),
);
?>

<h1>Create Attestation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>