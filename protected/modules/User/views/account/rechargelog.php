<!--充值记录列表 开始-->
		{elseif $_U.query_type=="recharge"}
		<div class="user_help">成功充值{$_U.account_log.recharge_success|default:0}元，线上成功充值{$_U.account_log.recharge_online|default:0}元，线下成功充值{$_U.account_log.recharge_downline|default:0}元,，手动成功充值{$_U.account_log.recharge_shoudong|default:0}元
</div>
		<table  border="0"  cellspacing="1" class="user_list_table">
		<form action="" method="post">
			<tr class="head" >
			<td>类型</td>
			<td>支付方式</td>
			<td>充值金额</td>
			<td>备注</td>
			<td>充值时间</td>
			<td>状态</td>
			<td>管理备注</td>
			</tr>
            <?php
foreach ($posts as $key => $val) {

?>
            
		
        
			<tr <?php if ($key % 2 == 1)
        echo 'class="tr1"'; ?>>
			<td><?php if ($val['type'] == 1)
        echo '网上充值';
    else
        echo '线下充值'; ?></td>
			<td>手动充值</td>
			<td><font color="#FF0000">￥<?php echo $val['money'];?></font></td>
			<td><?php echo $val['remark'];?></td>
			<td><?php echo date('Y-m-d H:i',$val['addtime']);?></td>
			<td><?php if($val['status']==0)
                            echo "审核中";
                        elseif($val['status']==1) echo "充值成功";
                        elseif($val['status']==2) echo "充值失败";
            
            ?></td>
			
			<td><?php echo ($val['verify_remark']==null)?"-":$val['verify_remark']; ?></td>
			</tr>
			<?php }?>
			<tr >
				<td colspan="11" class="page"><?php
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
			{/list}
		</form>	
		</table>
        
       
		<!--充值记录列表 结束-->