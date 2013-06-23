<?php
/* @var $this BorrowVouchCollectionController */
/* @var $model BorrowVouchCollection */

$this->breadcrumbs=array(
	'Borrow Vouch Collections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowVouchCollection', 'url'=>array('index')),
	array('label'=>'Manage BorrowVouchCollection', 'url'=>array('admin')),
);
?>

<h1>Create BorrowVouchCollection</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>