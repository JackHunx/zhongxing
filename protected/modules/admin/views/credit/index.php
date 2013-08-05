	<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="<?php echo Yii::app()->createUrl('admin/credit/apply'); ?>"><span>
					<img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/credit_add-48.png" alt="icon" /><br />
					额度申请
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/xindaishenhe.png" alt="icon" /><br />
					信贷审核
				</span></a></li>
                <li><a class="shortcut-button" href="<?php echo Yii::app()->
baseUrl; ?>/index.php?r=admin/account"><span>
					<img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/account.png" alt="icon" /><br />
					资金管理
				</span></a></li>
				
				
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
                <li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
                <li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
               
				
			</ul>
            <div class="clear"></div> <!-- End .clear -->
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
            'header'=>'总额度',
            'name'=>'credit',
            'value'=>'$data->credit',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
            ),
        array(
            'header'=>'可用额度',
            'name'=>'credit_use',
            'value'=>'$data->credit_use',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        array(
            'header'=>'冻结额度',
            'name'=>'credit_nouse',
            'value'=>'$data->credit_nouse',
            'type'=>'raw',
            'headerHtmlOptions' => array('width' => 120),
        ),
        //'realname',

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
        ),
    )); ?>