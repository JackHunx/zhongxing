
	<!--右边的内容 开始-->
	<div class="user_right ">
		<div class="user_right_l ">
						<div class="user_right_lmain">
				<div class="user_right_img">
					<img src="<?php echo $info['avatar'];?>" height="90" class="picborder"><br>
					<a href="index.php?r=User/avatar"><font color="#FF0000">[更换头像]</font></a>
				</div>
				<div class="user_right_txt">
					<ul>
						<li><span>信用等级：</span><img src="<?php $credit=Yii::app()->credit; echo $baseUrl.'/images/credit/'.$credit->getRank($credit->get(Yii::app()->user->id));?>" title="<?php echo Yii::app()->credit->get(Yii::app()->user->id);?>"><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/credit"><font color="#FF0000">积分查看</font></a></li>
						<li style="overflow:hidden">
							<div class="floatl"><span> 认&nbsp;&nbsp;&nbsp;   证：</span></div> 
							<a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/validate/realname"><div class="credit_pic_card_<?php echo ($model->real_status==null)?'0':$model->real_status;?>" title="实名认证"></div></a>
							<a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/validate/phone"><div class="credit_pic_phone_<?php echo ($model->phone_status==null)?'0':$model->phone_status;?>" title="手机认证"></div></a>
							<a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/validate/email"><div class="credit_pic_email_<?php echo $model->email_status==null?'0':$model->email_status;?>" title="邮箱认证"></div></a>
							<a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/validate/video"><div class="credit_pic_video_<?php echo $model->video_status;?>" title="视频认证"></div></a>
							<a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/validate/vip"><div class="credit_pic_vip_<?php echo $vip['status'];?>" title="VIP"></div></a>
							<a href="<?php echo Yii::app()->baseUrl ;?>/index.php?r=User/validate/scene"><div class="credit_pic_scene_<?php echo $model->scene_status;?>" title="现场认证"></div></a>
						</li>

						<li>  <a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/account/recharge"><font color="#FF0000">账号充值</font></a>  <a href="/index.php?user&amp;q=code/borrow/limitapp&amp;type=credit"><font color="#FF0000">申请信用额度</font></a>  <a href="/index.php?user&amp;q=code/borrow/limitapp&amp;type=vouch"><font color="#FF0000">申请担保额度</font></a> </li>
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
    <td width="12" align="left"><img height="30" width="12" src="<?php echo Yii::app()->baseUrl;?>/images/t_left.gif"></td>
    <td background="<?php echo Yii::app()->baseUrl;?>/images/t_bg.gif" align="left"><h1 class="dd">借入流程</h1></td>
    <td width="12" align="right"><img height="30" width="12" src="<?php echo Yii::app()->baseUrl;?>/images/t_right.gif"></td>
  </tr>
</tbody></table>
          </div>
		  <div class="m_l_bor">
	  <div class="process">
            <ul>
                <li><a target="_blank" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/info">填写详细信息</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/upload">上传资料证明</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/validate/vip">申请VIP</a></li><li class="icon2">
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
    <td width="12" align="left"><img height="30" width="12" src="<?php echo Yii::app()->baseUrl;?>/images/t_left.gif"></td>
    <td background="<?php echo Yii::app()->baseUrl;?>/images/t_bg.gif" align="left"><h1 class="dd">投资者上手</h1></td>
    <td width="12" align="right"><img height="30" width="12" src="<?php echo Yii::app()->baseUrl;?>/images/t_right.gif"></td>
  </tr>
</tbody></table>
          </div>
		  <div class="m_l_bor">
        <div class="process">
            <ul>
                <li><a target="_blank" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=User/info">填写详细信息</a></li><li class="icon2">
                </li> 
                <li><a target="_blank" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/validate/realname">实名认证</a></li><li class="icon2">
                </li>
                <li><a target="_blank" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/validate/vip">申请VIP</a></li><li class="icon2">
                </li>

                <li><a target="_blank" href="<?php echo Yii::app()->baseUrl;?>/index.php?r=user/invest">投标借出</a></li><li class="icon2"></li>
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
									<li><span><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/info/building"><?php echo $info['house'];?></a></span>房产资料</li>
					<li><span><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/info/company"><?php echo $info['company'];?></a></span>单位资料</li>
					<li><span><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/info/firm"><?php echo $info['firm'];?></a></span>私营业主</li>
					<li><span><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/info/finance"><?php echo $info['finance'];?></a></span>财务状况</li>
					<li><span><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/info/contact"><?php echo $info['contact'];?></a></span>联系方式</li>
					<li><span><a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=User/info/edu"><?php echo $info['edu'];?></a></span>教育背景</li>
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