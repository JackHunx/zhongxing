<?php
/* @var $this ArticleFieldsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Article Fields',
);

$this->menu=array(
	array('label'=>'Create ArticleFields', 'url'=>array('create')),
	array('label'=>'Manage ArticleFields', 'url'=>array('admin')),
);
?>

<h1>Article Fields</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
