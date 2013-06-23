<?php
/* @var $this BorrowAmountlogController */
/* @var $model BorrowAmountlog */

$this->breadcrumbs=array(
	'Borrow Amountlogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BorrowAmountlog', 'url'=>array('index')),
	array('label'=>'Create BorrowAmountlog', 'url'=>array('create')),
	array('label'=>'View BorrowAmountlog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BorrowAmountlog', 'url'=>array('admin')),
);
?>

<h1>Update BorrowAmountlog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>