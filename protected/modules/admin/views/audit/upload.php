<div class="notification attention png_bg">
				<div>
					有<font color = "red"><?php //echo $count; ?></font>条申请等待审核--<a href="<?php // echo
Yii::app()->baseUrl; ?>/index.php?r=admin/verify/realname&User[real_status]=0">点击审核</a>
				</div>
			</div>  
<!--- user list -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'upfile-list',
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
            'name' => 'user_search',
            'value' => '$data->user->username'),

        array(
            'header' => '真实姓名',
            'name' => 'user_realname',
            'value' => '$data->user->realname'),
        array(
            'header' => "认证类型",
            'value' => array($this, 'verifyType'),
            'type' => 'raw'),
        array(
            'header' => "说明",
            'value' => '$data->content',
            'type' => 'raw'),
        array(
            'header' => '认证图片',
            'value' => array($this, 'verifyPic'),
            'type' => 'raw'),
        array(
            'header' => '认证积分',
            'value' => '$data->jifen',
            'type' => 'raw'),
        array(
            'header' => '认证状态',
            'value' => array($this, 'verifyStatus'),
            'type' => 'raw'),
        array(
            'header' => '认证说明',
            'value' => '$data->verify_remark',
            'type' => 'raw'),
        array(
            'header' => '审核',
            'value' => array($this, 'verifyUpload'),
            'type' => 'raw'),
        //array(
        //            'header'=>'操作',
        //             'value'=>array($this,'verify'),
        //             'type'=>'raw',
        //        ),

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