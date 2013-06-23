<?php
/* @var $this AccountBankController */
/* @var $model AccountBank */

$this->breadcrumbs=array(
	'Account Banks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountBank', 'url'=>array('index')),
	array('label'=>'Create AccountBank', 'url'=>array('create')),
	array('label'=>'View AccountBank', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountBank', 'url'=>array('admin')),
);
?>

<h1>Update AccountBank <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>