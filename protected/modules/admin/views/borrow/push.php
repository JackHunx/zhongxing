
<div class="clear"></div>
	<div class="notification attention png_bg">
				<div>
					有<font color="red">[<?php echo $model->count('status=:status',array(':status'=>'0')); ?>]</font>条发标等待审核。
				</div>
			</div>
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
            'value' => '$data->user->username',
            'headerHtmlOptions' => array('width' => 100),
            ),

        array(
            'header' => '用户积分(分)',
            'name' => 'credit',
            'value' => '$data->vip->credit',
            'headerHtmlOptions' => array('width' => 80),
            ),
        array(
            'header' => '借款标题', //'name' => 'name',
            'value' => '$data->name',
            'type' => 'raw',
            ),

        array(
            'header' => '借款金额(元)',
            'name' => 'account',
            'value' => 'sprintf("%.2f",$data->account)'),
        array(
            'header' => '利率(%)',
            'name' => 'apr',
            'value' => 'sprintf("%.2f",$data->apr)'),
        array(
            'header' => '借款期限(月)',
            //'name' => 'collection',
            'value' => array($this, 'timeLimit'),
            'type' => 'raw',
            ),
        array(
            'header' => '状态',
            'value' => array($this, 'getStatus'),
            'type' => 'raw',
            'headerHtmlOptions' => array('width' => 50),
            ),
        array(
            'header' => '操作',
            'value' => array($this, 'getChange'),
            ),

        ),
    )); ?>
    <div class="clear"></div>