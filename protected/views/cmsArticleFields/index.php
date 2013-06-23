<?php
/* @var $this CmsArticleFieldsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cms Article Fields',
);

$this->menu=array(
	array('label'=>'Create CmsArticleFields', 'url'=>array('create')),
	array('label'=>'Manage CmsArticleFields', 'url'=>array('admin')),
);
?>

<h1>Cms Article Fields</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
