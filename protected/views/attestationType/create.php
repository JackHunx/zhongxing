<?php
/* @var $this AttestationTypeController */
/* @var $model AttestationType */

$this->breadcrumbs=array(
	'Attestation Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AttestationType', 'url'=>array('index')),
	array('label'=>'Manage AttestationType', 'url'=>array('admin')),
);
?>

<h1>Create AttestationType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>