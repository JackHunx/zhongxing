	<div class="notification attention png_bg">
				<div>
					有<font color = "red"><?php echo $count;?></font>条VIP申请等待审核
				</div>
			</div>  
            

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
            'header' => '操作',
            'value' => array($this, 'vipVerify'),
            'type' => 'raw',
            ),
       // array(
//            'header' => '审核',
//            'class' => 'CButtonColumn',
//            'deleteButtonOptions' => array('style' => 'display:none'),
//            'updateButtonOptions' => array('title' => '审核'),
//
//            'buttons' => array('update' => array('imageUrl' => null, 'label' => '审核','url'=>'aa'),
//                    ),
//            'template' => '{update}',
//
//            ),
        ),
    )); ?>
