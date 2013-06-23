<?php
/* @var $this BorrowUnionController */
/* @var $model BorrowUnion */

$this->breadcrumbs=array(
	'Borrow Unions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BorrowUnion', 'url'=>array('index')),
	array('label'=>'Manage BorrowUnion', 'url'=>array('admin')),
);
?>

<h1>Create BorrowUnion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>