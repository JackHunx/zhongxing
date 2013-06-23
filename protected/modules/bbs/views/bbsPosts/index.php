<?php
/* @var $this BbsPostsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bbs Posts',
);

$this->menu=array(
	array('label'=>'Create BbsPosts', 'url'=>array('create')),
	array('label'=>'Manage BbsPosts', 'url'=>array('admin')),
);
?>

<h1>Bbs Posts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
