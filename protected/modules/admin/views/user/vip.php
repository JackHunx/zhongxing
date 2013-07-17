	<div class="notification attention png_bg">
				<div>
					共有<font color = "red"><?php echo $count;?></font>&nbsp;名VIP会员--<font color="red">如要删除VIP用户请谨慎操作.</font>
				</div>
			</div>  
            

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'vip',
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
//
     //   array(
//            'header' => '状态',
//            'name'=>'vip_status',
//            'type' => 'raw',
//            'value' => array($this, 'vipStatus'),
//            ),
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
            'value' => 'date("Y-m-d H:i:s",$data->kefu_addtime)',
            'type' => 'raw',
            ),
        //'vip_remark',
       // array(
//            'header' => '操作',
//            'value' => array($this, 'vipVerify'),
//            'type' => 'raw',
//            ),
        array(
            'header' => '操作',
            'class' => 'CButtonColumn',
            'deleteButtonOptions' => array('删除'),
            //'updateButtonOptions' => array('title' => '审核'),

            'buttons' => array('delete' => array('imageUrl' => null, 'label' => '删除'),
                    ),
            'template' => '{delete}',

            ),
        ),
    )); ?>
