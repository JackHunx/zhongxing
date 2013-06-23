<?php
/* @var $this BorrowVouchController */
/* @var $model BorrowVouch */

$this->breadcrumbs=array(
	'Borrow Vouches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowVouch', 'url'=>array('index')),
	array('label'=>'Manage BorrowVouch', 'url'=>array('admin')),
);
?>

<h1>Create BorrowVouch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>