
<div class="notification png_bg">
				<div>
		<a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account">【账户信息】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/rechargeLog">【充值记录】</a>
       <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/cash">【申请提现】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/cash">【提现成功】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account/">【添加充值】</a>
        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/account">【扣除费用】</a>
				</div>
			</div>  
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
            'header' => '用户',
            'name' => 'username',
            'value' => '$data->user->username'),
        array(
            'header' => '类型',
            //'name' => 'total',
            'value' => array($this, 'rechargeType'),
            'type' => 'raw',
            ),
        array(
            'header' => '所属银行',
            'value' => array($this, 'payment'),
            'type' => 'raw',
            ),
        array(
            'header' => '流水号',
            'value' => '$data->trade_no',
            'type' => 'raw'),
        array(
            'header' => '充值金额(元)',
            'value' => '$data->money',
            'type' => 'raw'),
        array(
            'header' => '费用(元)',
            'value' => '$data->fee',
            'type' => 'raw'),
        array(
            'header' => '到账金额(元)',
            'value' => array($this, 'afterfee'),
            'type' => 'raw'),
        array(
            'header' => '充值时间',
            'value' => 'date("Y-m-d H:i:s",$data->addtime)',
            'type' => 'raw'),
        array(
            'header' => '状态',
            'value' => array($this, 'rechargeStatus'),
            'type' => 'raw'),
        array(
            'header' => '操作',
            'value' => array($this, 'verifyRecharge'),
            'type' => 'raw'),

        ),
    )); ?>