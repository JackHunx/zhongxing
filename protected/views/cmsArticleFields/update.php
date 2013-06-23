<?php
/* @var $this CmsArticleFieldsController */
/* @var $model CmsArticleFields */

$this->breadcrumbs=array(
	'Cms Article Fields'=>array('index'),
	$model->aid=>array('view','id'=>$model->aid),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsArticleFields', 'url'=>array('index')),
	array('label'=>'Create CmsArticleFields', 'url'=>array('create')),
	array('label'=>'View CmsArticleFields', 'url'=>array('view', 'id'=>$model->aid)),
	array('label'=>'Manage CmsArticleFields', 'url'=>array('admin')),
);
?>

<h1>Update CmsArticleFields <?php echo $model->aid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>