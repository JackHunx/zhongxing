<?php
/* @var $this BorrowCollectionController */
/* @var $model BorrowCollection */

$this->breadcrumbs=array(
	'Borrow Collections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowCollection', 'url'=>array('index')),
	array('label'=>'Manage BorrowCollection', 'url'=>array('admin')),
);
?>

<h1>Create BorrowCollection</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>