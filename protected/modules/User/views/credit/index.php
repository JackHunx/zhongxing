  
<div class="user_right">
		<div class="user_right_menu">
		<ul>
				<li class="title" ><a href="{$_U.query_url}/credit">信用积分记录</a></li>
			</ul>
		</div>
		
		<div class="user_right_main">
		
				<!--content 开始-->
		<div class="user_help" > 
		<strong>信用总得分：</strong> <font size="3" color="#FF0000"><strong><?php echo Yii::app()->credit->get(Yii::app()->user->id);?></strong></font>  <img src="<?php $credit=Yii::app()->credit; echo Yii::app()->baseUrl.'/images/credit/'.$credit->getRank($credit->get(Yii::app()->user->id));?>" title="<?php echo Yii::app()->credit->get(Yii::app()->user->id);?>">
		</div>
		<table  border="0"  cellspacing="1" class="user_list_table" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td  >积分类型</td>
					<td  >积分</td>
					<td  >备注</td>
				</tr>
                <?php 
                foreach($log as $val)
                {
                    echo '<tr >
					<td>'.$val['typeName'].'</td>
					<td>'.$val['value'].' 分</td>
					<td>'.$val['remark'].'</td>
				</tr>';
                }
                //分页
                ?>
                
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page"><?php
    //分页widget代码:
    $this->widget('CLinkPager', array(
        'pages' => $pages,
        'header' => '',
        'firstPageLabel' => '首页',
        'lastPageLabel' => '末页',
        'prevPageLabel' => '上一页',
        'nextPageLabel' => '下一页',
        'maxButtonCount' => '10'));
?></div>
					</td>
				</tr>
			</form>	
		</table>
        
        
		<!--content 结束-->
		
		
		</div>
<!--用户中心的主栏目 结束-->
<div class="footer">
	<p> </p>

	<p><a href="http://www.miibeian.gov.cn/" target="_blank"></a></p>
	<p>众兴投资 Copyright 2011-2015</p>
</div>

</div>
<!-- sidebar -->
</div>