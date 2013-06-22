<div class="wrap950 " style="margin-top:0">
	<!--左边的导航 开始-->
	<div class="user_left">
		
		<script type="text/javascript">
 function changeUserMenu(id){
    var mu = $("#user_title_"+id);
    var qe = $("#user_menu_"+id);
    if(qe.css('display')=='none'){
        mu.removeClass('title1').addClass('title');
        qe.css('display', 'block');
    }else{
        mu.removeClass('title').addClass('title1');
        qe.css('display', 'none');
    }
}
 </script>

 
<div class="user_menus">
	<div class="title" id="user_title_touzi"><span onclick="changeUserMenu('touzi')">&nbsp;</span>我是投资者</div>
	<div class="menu">
		<ul id="user_menu_touzi" style="display:block">
			<li><a href="/invest/index.html" target="_blank">我要投资</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/succes">已成功投资的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/bid">正在投标的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/tender_vouch">我担保的借款</a></li>
			<!--
			<li><a href="/index.php?user&q=code/borrow/appraisal">我的评价</a></li>
			<li><a href="/index.php?user&q=code/borrow/attention">我关注的借款</a></li>
			<li><a href="/index.php?user&q=code/borrow/tender_reply">贷款者回复</a></li>
			-->
		</ul>
	</div>
</div>
 

  
<div class="user_menus">
	<div class="title" id="user_title_jiekuan"><span onclick="changeUserMenu('jiekuan')">&nbsp;</span>我是借款者</div>
	<div class="menu">
		<ul id="user_menu_jiekuan">
			<li><a href="borrow/index.html" target="_blank">我要借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/publish">正在招标的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/unpublish">尚未发布的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/repayment">正在还款的借款</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/loanermsg">投资者回复</a></li>
			<li><a href="/index.php?user&amp;q=code/borrow/limitapp">额度申请</a></li>
		</ul>
	</div>
</div>
 
 
<div class="user_menus">
	<div class="title" id="user_title_zijin"><span onclick="changeUserMenu('zijin')">&nbsp;</span>资金管理</div>
	<div class="menu">
		<ul id="user_menu_zijin">
			<li><a href="/index.php?user&amp;q=code/account">帐户详情</a></li>
			<li><a href="/index.php?user&amp;q=code/account/bank">银行帐户</a></li>
			<li><a href="/index.php?user&amp;q=code/account/cash_new">帐户提现</a></li>
			<li><a href="/index.php?user&amp;q=code/account/recharge_new">帐户充值</a></li>
			<li><a href="/index.php?user&amp;q=code/account/cash">提现记录</a></li>
			<li><a href="/index.php?user&amp;q=code/account/recharge">充值记录</a></li>
			<li><a href="/index.php?user&amp;q=code/account/log">资金记录</a></li>
		</ul>
	</div>
</div>
 
 <!--
<div class="user_menus">
	<div class="title" id="user_title_kefu" ><span onclick="changeUserMenu('kefu')">&nbsp;</span>客户服务</div>
	<div class="menu">
		<ul id="user_menu_kefu">
			<li><a href="/index.php?user&q=view#info">我要提问</a></li>
			<li><a href="/index.php?user&q=view#info">在线客户</a></li>
		</ul>
	</div>
</div> 
-->	

<div class="user_menus">
	<div class="title" id="user_title_shezhi"><span onclick="changeUserMenu('shezhi')">&nbsp;</span>基本设置</div>
	<div class="menu">
		<ul id="user_menu_shezhi">
			<li><a href="/index.php?user&amp;q=code/userinfo">填写个人资料</a></li>
			<li><a href="/index.php?user&amp;q=code/user/avatar">更换头像</a></li>
			<li><a href="/index.php?user&amp;q=code/user/privacy">设置隐私</a></li>
			<li><a href="/index.php?user&amp;q=code/message">站内信</a></li>
			<li><a href="/index.php?user&amp;q=code/remind">提醒设置</a></li>
		</ul>
	</div>
</div>

<div class="user_menus">
	<div class="title" id="user_title_renzheng"><span onclick="changeUserMenu('renzheng')">&nbsp;</span>认证中心</div>
	<div class="menu">
		<ul id="user_menu_renzheng">
			<li><a href="/index.php?user&amp;q=code/user/realname">实名认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/email_status">邮箱认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/phone_status">手机认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/video_status">视频认证</a></li>
			<li><a href="/index.php?user&amp;q=code/user/scene_status">现场认证</a></li>
			<li><a href="/index.php?user&amp;q=code/attestation">资料证明</a></li>
		</ul>
	</div>
</div>


<div class="user_menus">
	<div class="title" id="user_title_haoyou"><span onclick="changeUserMenu('haoyou')">&nbsp;</span>好友管理</div>
	<div class="menu">
		<ul id="user_menu_haoyou">
			<li><a href="/index.php?user&amp;q=code/user/reginvite">邀请好友</a></li>
			<li><a href="/index.php?user&amp;q=code/user/request">好友请求</a></li>
			<li><a href="/index.php?user&amp;q=code/user/myfriend">我的好友</a></li>
			<li><a href="/index.php?user&amp;q=code/user/black">我的黑名单</a></li>
		</ul>
	</div>
</div>



<div class="user_menus">
	<div class="title" id="user_title_safe"><span onclick="changeUserMenu('safe')">&nbsp;</span>安全中心</div>
	<div class="menu">
		<ul id="user_menu_safe">
			<li><a href="/index.php?user&amp;q=code/user/userpwd">修改登录密码</a></li>
			<li><a href="/index.php?user&amp;q=code/user/paypwd">修改支付密码</a></li>
			<li><a href="/index.php?user&amp;q=code/user/protection">密码保护</a></li>
		</ul>
	</div>
</div>

<!--
<div class="user_menus">
	<div class="title" id="user_title_jifen" ><span onclick="changeUserMenu('jifen')">&nbsp;</span>礼品折扣</div>
	<div class="menu">
		<ul id="user_menu_jifen">
			<li><a href="/index.php?user&q=view#info">积分礼品</a></li>
			<li><a href="/index.php?user&q=view#info">折扣商家</a></li>
		</ul>
	</div>
</div>
-->
<div class="user_menus">
	<div class="title" id="user_title_shequ"><span onclick="changeUserMenu('shequ')">&nbsp;</span>社区管理</div>
	<div class="menu">
		<ul id="user_menu_shequ">
			<li><a href="/index.php?user&amp;q=view#info">我的话题</a></li>
		</ul>
	</div>
</div>
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right ">
		<div class="user_right_l ">
						<div class="user_right_lmain">
				<div class="user_right_img">
					<img src="/data/avatar/30_avatar_middle.jpg" height="90" class="picborder"><br>
					<a href="index.php?user&amp;q=code/user/avatar"><font color="#FF0000">[更换头像]</font></a>
				</div>
				<div class="user_right_txt">
					<ul>
						<li><span>信用等级：</span><img src="<?php echo $baseUrl?>/images/credit/credit_s15.gif" title="67"><a href="/index.php?user&amp;q=code/user/credit"><font color="#FF0000">积分查看</font></a></li>
						<li style="overflow:hidden">
							<div class="floatl"><span> 认&nbsp;&nbsp;&nbsp;   证：</span></div> 
							<a href="/index.php?user&amp;q=code/user/realname"><div class="credit_pic_card_1" title="实名已认证"></div></a>
							<a href="/index.php?user&amp;q=code/user/phone_status"><div class="credit_pic_phone_<?php echo $model->phone_status;?>" title="手机已认证"></div></a>
							<a href="/index.php?user&amp;q=code/user/email_status"><div class="credit_pic_email_<?php echo $model->email_status;?>" title="邮箱已认证"></div></a>
							<a href="/index.php?user&amp;q=code/user/video_status"><div class="credit_pic_video_<?php echo $model->video_status;?>" title="视频已认证"></div></a>
							<a href="/vip/index.html"><div class="credit_pic_vip_<?php echo $vip['status'];?>" title="VIP"></div></a>
							<a href="/index.php?user&amp;q=code/user/scene_status"><div class="credit_pic_scene_0" title="未通过现场认证"></div></a>
						</li>

						<li>  <a href="/index.php?user&amp;q=code/account/recharge_new"><font color="#FF0000">账号充值</font></a>  <a href="/index.php?user&amp;q=code/borrow/limitapp&amp;type=credit"><font color="#FF0000">申请信用额度</font></a>  <a href="/index.php?user&amp;q=code/borrow/limitapp&amp;type=vouch"><font color="#FF0000">申请担保额度</font></a> </li>
						<li><span>VIP 期限： <a href="<?php echo $baseUrl; ?>/index.php?r=User/validate/vip"><?php echo $vip['msg']; ?></a></span></li>
						<li><span>系统告知：</span><a href="/index.php?user&amp;q=code/message"><font color="#FF0000">24</font> 封未读信息</a>&nbsp; &nbsp; <a href="/index.php?user&amp;q=code/user/request">0 个好友邀请</a></li>
					</ul>
				</div>
			</div>
			
			<div class="user_right_li">
				<div class="title"><span style="float:right; font-size:12px; font-weight:normal"> 上次登录IP：112.233.85.210 - 上次登录时间：2013-06-22 13:49 </span>账号详情 </div>
				<div class="content">
									<ul>
						<li><span> 账户总额[?]：<font>￥0.10</font>  <a href="index.php?user&amp;q=code/account/log">资金记录查询</a>  | <a href="index.php?user&amp;q=code/account">账户资金详情</a> </span></li>
						<li><span> 可用余额[?]：<font>￥0.10</font>   </span>&nbsp;<a href="index.php?user&amp;q=code/account/cash_new"><font style="font-size:12px;" color="#FF0000">[提现]</font></a> <a href="index.php?user&amp;q=code/account/recharge_new"><font style="font-size:12px;" color="#FF0000">[充值]</font>  </a> </li>
						<li><span> 冻结总额[?]：<font>￥0.00</font>   </span></li>
						<li><span> 待收总额[?]：<font>￥0.00</font></span></li>
						<li><span> 待收利息[?]：<font>￥0</font>   </span></li>
						<li><span> 最近待收金额[?]：<font>￥0</font></span></li>
						<li><span> 最近待收时间[?]：<font></font> <a href="index.php?user&amp;q=code/borrow/gathering&amp;status=0">[待收明细]</a></span></li>
						<li><span> 已赚利息[?]：<font>￥0</font>    </span></li>
						<li><span> 已赚奖励[?]：<font>￥0</font>    </span></li>
						<li><span> 借款总额[?]：<font>￥0</font>    </span></li>
						<li><span> 待还总额[?]：<font>￥0</font>    </span></li>
						<li><span> 最近待还金额[?]：<font>￥0</font></span></li>
						<li><span> 最近待还时间[?]：<font>-</font> <a href="index.php?user&amp;q=code/borrow/repaymentplan">[还款明细]</a></span></li>
						<li><span> 待扣会费[?]：<font>￥0</font>   </span></li>
						<li><span> 信用额度[?]：<font>￥20000.00</font>    </span></li>
						<li><span> 可用信用额度[?]：<font>￥20000.00</font>    </span></li>
						<li><span> 借款担保额度[?]：<font>￥0.00</font>    </span></li>
						<li><span> 可用借款担保额度[?]：<font>￥0.00</font>    </span></li>
						<li><span> 投资担保额度[?]：<font>￥0.00</font>    </span></li>
						<li><span> 可用投资担保额度[?]：<font>￥0.00</font>    </span></li>
					</ul>
								</div>
			</div>


<div class="t10">
		  <div class="title">
		      <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="12" align="left"><img height="30" width="12" src="/themes/61dai/images/t_left.gif"></td>
    <td background="/themes/61dai/images/t_bg.gif" align="left"><h1 class="dd">借入流程</h1></td>
    <td width="12" align="right"><img height="30" width="12" src="/themes/61dai/images/t_right.gif"></td>
  </tr>
</tbody></table>
          </div>
		  <div class="m_l_bor">
	  <div class="process">
            <ul>
                <li><a target="_blank" href="/?user&amp;q=code/userinfo">填写详细信息</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/?user&amp;q=code/attestation">上传资料证明</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/vip/index.html">申请VIP</a></li><li class="icon2">
                </li>

                <li><a target="_blank" href="/publish/index.html">发布借款信息</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/?user&amp;q=code/borrow/repayment">借款成功</a></li>
            </ul>
        </div></div></div>			



<div class="t10">
		  <div class="title">
		      <table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="12" align="left"><img height="30" width="12" src="/themes/61dai/images/t_left.gif"></td>
    <td background="/themes/61dai/images/t_bg.gif" align="left"><h1 class="dd">投资者上手</h1></td>
    <td width="12" align="right"><img height="30" width="12" src="/themes/61dai/images/t_right.gif"></td>
  </tr>
</tbody></table>
          </div>
		  <div class="m_l_bor">
        <div class="process">
            <ul>
                <li><a target="_blank" href="/?user&amp;q=code/userinfo">填写详细信息</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/?user&amp;q=code/user/realname">实名认证</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="/vip/index.html">申请VIP</a></li><li class="icon2">
                </li>

                <li><a target="_blank" href="/invest/index.html">投标借出</a></li><li class="icon2"></li>
                <li><a target="_blank" href="/?user&amp;q=code/borrow/success">等待回收还款</a></li>
            </ul>
        </div></div></div>
			
			<div class="user_right_li">
				<div class="title">好友动态</div>
				<div class="content">
					<ul>
											</ul>
				</div>
			</div>
		</div>
		
		<div class="user_right_r">
			<div class="user_right_info">
				<div class="title"><strong>个人资料完成率</strong></div> 
				<div>
				<ul>
									<li><span><a href="/index.php?user&amp;q=code/userinfo/building"><font color="#009900">已填写</font></a></span>房产资料</li>
					<li><span><a href="/index.php?user&amp;q=code/userinfo/company"><font color="#FF0000">未填写</font></a></span>单位资料</li>
					<li><span><a href="/index.php?user&amp;q=code/userinfo/firm"><font color="#FF0000">未填写</font></a></span>私营业主</li>
					<li><span><a href="/index.php?user&amp;q=code/userinfo/finance"><font color="#FF0000">未填写</font></a></span>财务状况</li>
					<li><span><a href="/index.php?user&amp;q=code/userinfo/contact"><font color="#FF0000">未填写</font></a></span>联系方式</li>
					<li><span><a href="/index.php?user&amp;q=code/userinfo/edu"><font color="#FF0000">未填写</font></a></span>教育背景</li>
					<!--<li><span>已填写</span><a href="/index.php?user&q=code/userinfo/building">工作经历</a></li>-->
				</ul>
								</div>
			</div>
			
			<div class="user_right_li">
				<div class="title">网站公告</div>
				<div class="content">
					<ul>
												<li><a href="/gonggao/a183.html" target="_blank">公司工作人员及县级分公司理财师奖励</a></li>
												<li><a href="/gonggao/a182.html" target="_blank">关于在线充值</a></li>
												<li><a href="/gonggao/a173.html" target="_blank">众兴贷招商网站推广员（代办员）公告</a></li>
												<li><a href="/gonggao/a149.html" target="_blank">资金是否安全</a></li>
												<li><a href="/gonggao/a148.html" target="_blank">如何提高借款成功率</a></li>
												<li><a href="/gonggao/a146.html" target="_blank">怎样找回密码及确保密码安全</a></li>
											</ul>
				</div>
			</div>
			
			<div class="user_right_li">
				<div class="title">新手入门</div>
				<div class="content">
					<ul>
												<li><a href="/new/a181.html" target="_blank">借款流程</a></li>
												<li><a href="/new/a180.html" target="_blank">投资流程</a></li>
												<li><a href="/new/a179.html" target="_blank">还款流程</a></li>
												<li><a href="/new/a174.html" target="_blank">平台术语</a></li>
												<li><a href="/new/a125.html" target="_blank">测试信贷收费标准</a></li>
												<li><a href="/new/a124.html" target="_blank">现场考察收费标准</a></li>
											</ul>
				</div>
			</div>
			
			<div class="user_right_li">
				<div class="title">论坛动态</div>
				<div class="content">
					<ul>
												<li><a href="/bbs/index.html?q=view&amp;tid=1" target="_blank">P2P网贷投资客：从借款人到股东（网贷理财经历分享）</a></li>
											</ul>
				</div>
			</div>
		</div>
		
	</div>
	<!--右边的内容 结束-->
</div>