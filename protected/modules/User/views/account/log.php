<!--资金使用记录列表 开始-->
		{if $_U.query_type=="log"}
		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		记录时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>   
		{linkages nid="account_type" value="$magic.request.type" name="type" type="value" default="全部" } <input value="搜索" type="submit" onclick="sousuo('{$_U.query_url}/publish')" /> 总计：￥{$_U.account_num|default:0}
		</div>	
			<table  border="0"  cellspacing="1" class="user_list_table">
			  <form action="" method="post">
				<tr class="head">
					<td>类型</td>
					<td>操作金额</td>
					<td>总金额</td>
					<td>可用金额</td>
					<td>冻结金额</td>
					<td>待收金额</td>
					<td>交易对方</td>
					<td>记录时间</td>
					<td width="130">备注信息</td>
				</tr>
				{ foreach  from=$_U.account_log_list key=key item=item}
				<tr  {if $key%2==1} class="tr1"{/if}>
					<td>{ $item.type|linkage:"account_type"}</td>
					<td>￥{ $item.money}</td>
					<td>￥{ $item.total}</td>
					<td>￥{ $item.use_money}</td>
					<td>￥{ $item.no_use_money|default:0}</td>
					<td>￥{ $item.collection}</td>
					<td><a href="/u/{$item.to_user}" target="_blank">{ $item.to_username|default:admin}</a></td>
					<td>{ $item.addtime|date_format:"Y-m-d H:i:s"}</td>
					<td width="130">{ $item.remark}</td>
				</tr>
				{ /foreach}
				<tr >
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>