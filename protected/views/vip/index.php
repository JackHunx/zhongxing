<?php
/* @var $this VipController */
/* @var $dataProvider CActiveDataProvider */



?>

<h1>Vips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
