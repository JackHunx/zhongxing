!--提现记录列表 开始-->
		{elseif $_U.query_type=="cash"}
		<div class="user_help">成功提现{$_U.cash_log.cash_success.money|default:0}元，提现到账{$_U.cash_log.cash_success.credited|default:0}元，手续费{$_U.cash_log.cash_success.fee|default:0}元
</div>
		<table  border="0"  cellspacing="1" class="user_list_table">
			<form action="" method="post">
				<tr class="head">
					<td>提现银行</td>
					<td>提现账号</td>
					<td>提现总额</td>
					<td>到账金额</td>
					<td>手续费</td>
					<td>提现时间</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
				{ foreach  from=$_U.account_cash_list key=key item=item}
				<tr  {if $key%2==1} class="tr1"{/if}>
					<td>{ $item.bank_name}</td>
					<td>{ $item.account}</td>
					<td>￥{ $item.total|default:0}</td>
					<td>￥{ $item.credited|default:0}</td>
					<td>￥{ $item.fee|default:0}</td>	
					<td>{ $item.addtime|date_format:"Y-m-d H:i"}</td>
					<td>{if $item.status==0}审核中{elseif  $item.status==1} 提现成功 {elseif $item.status==2}提现失败 {elseif $item.status==3}用户取消{/if}</td>
					<td>{if $item.verify_remark!=""}{$item.verify_remark}{else}{if $item.status==0}<a href="#" onclick="javascript:if(confirm('确定要取消此提现申请')) location.href='{$_U.query_url}/cash_cancel&id={$item.id}'">取消提现</a>{else}-{/if}{/if}</td>
				</tr>
				{ /foreach}
				<tr >
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>
		<!--提现记录列表 结束-->