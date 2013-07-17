	<div class="notification information png_bg">
				<div>
					<font color="red">如要查看详细用户信息,请登录用户账户查看。后台暂时不允许修改账户信息.</font>
				</div>
			</div>  
            
<!--- user list -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-list',
    'cssFile' => Yii::app()->baseUrl . '/css/grid_view.css',
    'dataProvider' => $model->search(),
    'filter' => $model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
    'columns' => array(


        //'sex',
        array(
            'header' => '用户',
            'type' => 'raw',
            'value' => array($this, 'getUser'),
            ),
        array(
            'header' => '房产资料',
            'type' => 'raw',
            'value' => array($this, 'house'),
            ),
        array(
            'header' => "单位资料",
            'value' => array($this, 'company'),
            'type' => 'raw'),
        array(
            'header' => '私营业主',
            'value' => array($this, 'priv'),
            'type' => 'raw'),
        array(
            'header' => '财务状况',
            //'name'=>'card_id',
            'value'=>array($this,'finance'),
            'type' => 'raw',
            ),
        array(
            'header' => '联系方式',
            'value'=>array($this,'contact'),
            'type' => 'raw',
            ),
        array(
            'header' => '配偶资料',
            'value'=>array($this,'mate'),
            'type' => 'raw',

            ),
        array(
            'header' => '教育背景',
            //'name'=>'real_status',
            'value'=>array($this,'edu'),
            'type' => 'raw',
            ),
        array(
            'header' => '其他',
            //'name'=>'real_status',
            'value'=>array($this,'others'),
            'type' => 'raw',
            ),
        //array(
        //            'header'=>'操作',
        //             'value'=>array($this,'verify'),
        //             'type'=>'raw',
        //        ),
        array(
            'header' => '操作',
            'class' => 'CButtonColumn',
            'template' => '{verify}',
            'buttons' => array('verify' => array('label' => '修改',
                        // 'url'=>array($this,'verify'),
                        ), ),
            ),
        // 'User.username',
        //array(
        //        'username'=>'user_search',
        //        'value'=>'$data->user->username'
        //       ),
        //
        //		'kefu_username',
        //
        //        array(
        //        'name'=>'vip_status',
        //        'type'=>'raw',
        //        'value'=>array($this,'vipStatus'),
        //        ),
        //
        //		'vip_remark',

        //	array(
        //            'header'=>'操作',
        //			'class'=>'CButtonColumn',
        //            'deleteButtonOptions'=>array('title'=>'删除'),
        //            'updateButtonOptions'=>array('title'=>'修改'),
        //
        //            'buttons'=>array('update'=>array('imageUrl'=>null,'label'=>'审核'),
        //            'url'=>'test',
        //            ),
        //            'template'=>'{update}',
        //
        //		),
        ),
    )); ?>