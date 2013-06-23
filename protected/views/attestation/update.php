<?php
/* @var $this AttestationController */
/* @var $model Attestation */

$this->breadcrumbs=array(
	'Attestations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attestation', 'url'=>array('index')),
	array('label'=>'Create Attestation', 'url'=>array('create')),
	array('label'=>'View Attestation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Attestation', 'url'=>array('admin')),
);
?>

<h1>Update Attestation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>