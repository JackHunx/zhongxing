<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'credit-list',
    'cssFile' => Yii::app()->baseUrl . '/css/grid_view.css',
    'dataProvider' => $model->search(),
    'filter' => $model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
    'columns' => array(

        array(
            'name' => 'id',
            'headerHtmlOptions' => array('width' => 50),

            ),
        array(
            'header' => '用户名',
            'name' => 'username',
            'value'=>'$data->user->username',
            'headerHtmlOptions' => array('width' => 100),
            ),
        
        array(
            'header'=>'申请类型',
            'value'=>array($this,'getAmountType'),
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        array(
            'header'=>'原有额度',
            //'name'=>'credit_nouse',
            'value'=>'$data->account_old',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        array(
            'header'=>'申请额度',
            //'name'=>'account',
            'value'=>'$data->account',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        array(
            'header'=>'新额度',
            //'name'=>'credit_nouse',
            'value'=>'$data->account_new',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        array(
            'header'=>'申请时间',
            //'name'=>'credit_nouse',
            'value'=>'date("Y-m-d H:i:s",$data->addtime)',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        array(
            'header'=>'内容',
            //'name'=>'credit_nouse',
            'value'=>'$data->content',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
         array(
            'header'=>'备注',
            //'name'=>'credit_nouse',
            'value'=>'$data->remark',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        array(
            'header'=>'状态',
            //'name'=>'credit_nouse',
            'value'=>array($this,'applyStatus'),
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 60),
        ),
        array(
            'header'=>'操作',
            'value'=>array($this,'verifyApply'),
            'type'=>'raw',
            'headerHtmlOptions'=>array('width'=>60),
        ),
        
        ),
    )); ?>