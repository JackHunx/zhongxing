<?php
/* @var $this AttestationTypeController */
/* @var $model AttestationType */

$this->breadcrumbs=array(
	'Attestation Types'=>array('index'),
	$model->name=>array('view','id'=>$model->type_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AttestationType', 'url'=>array('index')),
	array('label'=>'Create AttestationType', 'url'=>array('create')),
	array('label'=>'View AttestationType', 'url'=>array('view', 'id'=>$model->type_id)),
	array('label'=>'Manage AttestationType', 'url'=>array('admin')),
);
?>

<h1>Update AttestationType <?php echo $model->type_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>