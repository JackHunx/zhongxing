<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'account-list',
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
            'header' => '用户',
            'name' => 'username',
            'value' => '$data->user->username'),

        array(
            'header' => '用户积分(分)',
            'name' => 'credit',
            'value' => '$data->vip->rcredit'),
        array('header' => '借款标题', //'name' => 'name',
                'value' => '$data->name'),
        'type' => 'raw',
        array(
            'header' => '借款金额(元)',
            'name' => 'account',
            'value' => '$data->account'),
        array(
            'header' => '利率(%)',
            'name' => 'apr',
            'value' => 'sprintf("$.2f",$data->apr)'),
        array(
            'header' => '借款期限(月)',
            //'name' => 'collection',
            'value' => array($this, 'timeLimit'),
            'type' => 'raw',
            ),
        array(
            'header' => '类型',
            //'name' => 'collection',
            'value' => '$data->collection',
            'type' => 'raw'),
        array(
            'header' => '状态',
            'name' => 'collection',
            'value' => '$data->collection'),
        array(
            'header' => '操作',
            'name' => 'collection',
            'value' => '$data->collection'),


        ),
    )); ?>
    <div class="clear"></div>