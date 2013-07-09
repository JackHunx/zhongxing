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
			{list module="account" function="GetRechargeList" showpage="3" var="loop" user_id="0" epage=20}
			{ foreach  from=$loop.list key=key item=item}
			<tr  {if $key%2==1} class="tr1"{/if}>
			<td>{if $item.type==1}网上充值{else}线下充值{/if}</td>
			<td>{ $item.payment_name|default:"手动充值"}</td>
			<td><font color="#FF0000">￥{ $item.money}</font></td>
			<td>{ $item.remark}</td>
			<td>{ $item.addtime|date_format:"Y-m-d H:i"}</td>
			<td>{if $item.status==0}审核中{elseif  $item.status==1} 充值成功 {elseif $item.status==2}充值失败{/if}</td>
			
			<td>{ $item.verify_remark|default:"-"}</td>
			</tr>
			{ /foreach}
			<tr >
				<td colspan="11" class="page">{$loop.showpage}</div>
				</td>
			</tr>
			{/list}
		</form>	
		</table>
		<!--充值记录列表 结束-->