<?php
/* @var $this VipController */
/* @var $model Vip */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vip-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Vip审核</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search', array('model' => $model, ));
?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'vip-grid',
    'cssFile' => Yii::app()->baseUrl . '/css/grid_view.css',
    'dataProvider' => $model->search(),
    'filter' => $model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
    'columns' => array(
        'user_id',
        // 'User.username',
        array(
            'name' => 'user_search',
            'value' => '$data->user->username',
            'type' => 'raw'),

        array(
            'header' => '客服',
            'value' => '$data->kefu_username',
            'type' => 'raw',
            ),
        //'kefu_username',

        array(
            'header' => '状态',
            //'name'=>'vip_status',
            'type' => 'raw',
            'value' => array($this, 'vipStatus'),
            ),
        array(
            'header' => '是否缴费',
            //'name'=>'vip_status',
            'type' => 'raw',
            'value' => array($this, 'vipMoney'),
            ),
        array(
            'header' => '说明',
            'value' => '$data->vip_remark',
            'type' => 'raw',
            ),
        array(
            'header' => '添加时间',
            'value' => array($this, 'vipAddTime'),
            'type' => 'raw',
            ),
        //'vip_remark',

        array(
            'header' => '审核',
            'class' => 'CButtonColumn',
            'deleteButtonOptions' => array('style' => 'display:none'),
            'updateButtonOptions' => array('title' => '审核'),

            'buttons' => array('update' => array('imageUrl' => null, 'label' => '审核'),
                    'view' => array('imageUrl' => null, 'label' => '查看/')),
            'template' => '{view}{update}{delete}',

            ),
        ),
    )); ?>
