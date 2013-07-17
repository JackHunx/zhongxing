<!-- notice begin -->
<div class="notification information png_bg">
				<a href="#" class="close"><img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/cross_grey_small.png" title="关闭提示" alt="close" /></a>
				<div>
					审核提示
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

        'username',
        'realname',

        //'sex',
        array(
            'header' => '邮箱认证',
            'type' => 'raw',
            'value' => array($this, 'validateEmail'),
            ),
        array(
            'header' => '实名认证',
            'type' => 'raw',
            'value' => array($this, 'validateRealname'),
            ),

        array(
            'header' => "手机认证",
            'value' => array($this, 'validatePhone'),
            'type' => 'raw'),
        array(
            'header' => '视频认证',
            'value' => array($this, 'validateVideo'),
            'type' => 'raw'),
        array(
            'header' => '现场认证',
            //'name'=>'card_id',
            'value' => array($this, 'validateScene'),
            'type' => 'raw',
            ),
         array(
            'header' => '总积分',
            //'name'=>'card_id',
            'value' => array($this, 'getCredit'),
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
            'buttons' => array('verify' => array(
                    'label' => '积分修改',
                    'url' => array($this, 'creditUrl'),
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

<div id="validate" style="display: none;">00021</div>