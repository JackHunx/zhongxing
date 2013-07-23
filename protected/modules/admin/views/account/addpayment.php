<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'rechargeLog-list',
    'cssFile' => Yii::app()->baseUrl . '/css/grid_view.css',
    'dataProvider' => $model->search(),
    'filter' => $model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
    'columns' => array(
        array(
            'header' => 'ID',
            'type' => 'raw',
            'value' => '$data->id',
            ),
        //'sex',
        array(
            'header' => '开户行',
            'name' => 'name',
            'value' => '$data->name'),

        array(
            'header' => '账号',
            'name' => 'description',
            'value' => '$data->description',
            'type' => 'raw'),
        array(
            'header' => '类型',
            'value' => array($this, 'getPaymentType'),
            'type' => 'raw',
            ),

        array(
            'header' => '操作',
            'class' => 'CButtonColumn',
            'deleteButtonOptions' => array('title' => '删除'),
            'updateButtonOptions' => array('title' => '修改'),

            'buttons' => array(
                'update' => array('imageUrl' => null, 'label' => '修改','url'=>'Yii::app()->createUrl("admin/account/addPayment",array("id"=>$data->id))'),
                'delete' => array('imageUrl' => null, 'label' => '/删除','url'=>'Yii::app()->createUrl("admin/account/deletePaymentType",array("id"=>$data->id))'),
                ),
            'template' => '{update}{delete}',

            ),

        ),
    )); ?>