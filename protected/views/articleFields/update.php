<?php
/* @var $this ArticleFieldsController */
/* @var $model ArticleFields */

$this->breadcrumbs=array(
	'Article Fields'=>array('index'),
	$model->aid=>array('view','id'=>$model->aid),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticleFields', 'url'=>array('index')),
	array('label'=>'Create ArticleFields', 'url'=>array('create')),
	array('label'=>'View ArticleFields', 'url'=>array('view', 'id'=>$model->aid)),
	array('label'=>'Manage ArticleFields', 'url'=>array('admin')),
);
?>

<h1>Update ArticleFields <?php echo $model->aid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>