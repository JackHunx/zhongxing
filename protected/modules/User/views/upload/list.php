<div class="clear"></div>
<div class="notification attention png_bg">
				<div>
			有[<font color = "red"><?php echo $model->count('user_id=:user_id and status=:status',array(':user_id'=>Yii::app()->user->id,':status'=>'0')); ?></font>]条申请等待审核--<a href="<?php echo Yii::app()->createUrl('User/upload/list',array('Attestation[status]'=>'0')) ;?>">点击查看</a>&nbsp;&nbsp;	已有[<font color = "blue"><?php echo $model->count('user_id=:user_id and status=:status',array(':user_id'=>Yii::app()->user->id,':status'=>'1')); ?></font>]条通过审核--<a href="<?php echo Yii::app()->createUrl('User/upload/list',array('Attestation[status]'=>'1')) ;?>">点击查看</a>&nbsp;&nbsp;有[<font color = "grey"><?php echo $model->count('user_id=:user_id and status=:status',array(':user_id'=>Yii::app()->user->id,':status'=>'2')); ?></font>]条未通过审核--<a href="<?php echo Yii::app()->createUrl('User/upload/list',array('Attestation[status]'=>'2')) ;?>">点击查看</a>
				</div>
			</div> 
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'upfile-list',
    'cssFile' => Yii::app()->baseUrl . '/css/grid_view.css',
    'dataProvider' => $model->search(),
    'filter' => $model,
    //'htmlOptions'=>array('stytle'=>'textalgin:center'),
    'columns' => array(


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
            'header' => '积分(分)',
            'value' => '$data->jifen',
            'type' => 'raw'),
        array(
            'header' => '状态',
            'value' => array($this,'verifyStatus'),
            'type' => 'raw'),
        array(
            'header' => '审核说明',
            'value' => '$data->verify_remark',
            'type' => 'raw'),
            
        ),
    )); ?>