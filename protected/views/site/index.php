
<!-- content begin -->
<div>
	<!-- slide --->
	<div>
	<div id="slider_nav" class="slider_nav pull-left">
			<div class="conbox">
				<div><a href="http://www.17sucai.com/" title="jquery 3D图片滚动一个漂亮的手机软件网站图片展示"><img width="620" height="340" alt="jquery 3D图片滚动一个漂亮的手机软件网站图片展示" src="images/c9cfb68c13cbe925d3c9a03912f3b1de.jpg"></a></div>
				<div><a href="hhttp://www.17sucai.com/" title="jquery 分类搜索框防谷歌网站搜索页面"><img width="620" height="340" alt="jquery 分类搜索框防谷歌网站搜索页面" src="images/310772035582a551c3afd8f6cc071409.jpg"></a></div>
				<div><a href="http://www.17sucai.com/" title="jquery 文本框提示顶部弹跳框使用jQuery和CSS3的插件"><img width="620" height="340" alt="jquery 文本框提示顶部弹跳框使用jQuery和CSS3的插件" src="images/f4fe9dd611bd459c0244159163109bc4.jpg"></a></div>
				<div><a href="http://www.17sucai.com/" title="jquery 图片特效用CSS3和HTML5制作仿动画头条报纸缩小到放大翻转图片展示"><img width="620" height="340" alt="jquery 图片特效用CSS3和HTML5制作仿动画头条报纸缩小到放大翻转图片展示" src="images/323ce4b13f72648e096bd1a86cba762a.jpg"></a></div>
				<div><a href="http://www.17sucai.com/" title="jquery评论星星打分特效、鼠标滑过星星显示评论信息"><img width="620" height="340" alt="jquery评论星星打分特效、鼠标滑过星星显示评论信息" src="images/9fae30738c94fb8e47dd2ba3e6003290.jpg"></a></div>
			</div>

			<div class="switcher">
				<a href="#" class="cur">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
			</div>
		</div><!--slider end-->
	<!--- end slide -->
	<!-- login begin --
	
	<div class="l index_topnav_rightnav">
                 <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l">用户登录</span></li>
                <li class="l titright"></li>
            </ul>
			<div class="index_login_nav">
                  
				<div style="padding: 5px 0 0; margin-left: 10px;">
                    <table align="center" cellpadding="3" cellspacing="3" style="width:280px;">
                 
						<tbody><tr>
                            <td style="width:30px;" align="right">
                                用户名：
                            </td>
                            <td class="style2">
                                <input name="txtUserName" type="text" value="test3" id="txtUserName" class="lsls" onfocus="changeborder(this)" onblur="changeborder2(this)" >
                                <span id="_txtUserName" class="red"></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:30px;"  align="right">
                                密 码：
                            </td>
                            <td class="style2">
                                <input name="txtPassword" type="password" maxlength="50" id="txtPassword" onfocus="changeborder(this)" onblur="changeborder2(this)" >
                               
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                <div id="palError" class="ErrorMsg" style="display: none;
                                    margin-left: 0px; margin-bottom: 0px; width: 280px">
	
                                    <span style="margin: 6px 0 6px 35px;">
                                        
                                    </span>
                                
</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="style1">
                            </td>
                            <td class="style2">
                                <input class="center" type="image" name="btnLogin" id="btnLogin" src="http://static.ppdai.com/skin/images/login_n_button.gif" alt="登录" style="border-width:0px;width:85px;height:28px;">&nbsp;
                            </td>
                        </tr>
                        
                    </tbody></table>
                </div>
            </div>
        </div>
	<!---->
	<div class="l index_topnav_loginnav">
                 <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l">用户登录</span><a class="pull-right gray" style="color:#666666" href="#">>>免费注册</a></li>
                <li class="l titright"></li>
            </ul>
	<div class="login-box index_login_nav">
				<div class="center top10">
					
					<form class="form-horizontal" action="index.html" method="post">
						<fieldset>
							<div class="input-prepend" data-rel="tooltip" data-original-title="用户名">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus="" class="input-large span10" name="username" id="username" type="text" value="用户名">
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" data-rel="tooltip" data-original-title="密码">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="admin123456">
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">登录</button>
							
							</p>
							
						</fieldset>
					</form>
					</div>
				
				</div>
	<!-- login end --->
</div>
</div>

<!--- going list-->
<div class="pull-left index_center_leftnav l">
            <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l">进行中的列表</span><a href="/lend" style="color: #999999" class="r">&gt;&gt;更多</a></li>
                <li class="l titright"></li>
            </ul>
            <div class="clear">
            </div>
            <div class="blue_fenge">
            </div>
            <div class="list_nav">
            
            <?php 
            
            for($i=0;$i<5;$i++)
            {
            echo <<<ETO
                <!-- single around -->
                           <div class="nowlistnav">
                            <div class="l img_nav">
                                <img style="width: 50px; height: 50px;" src="http://img.ppdai.com/5eb1hbyukgcikkh4zm_120.png"></div>
                            <div>
                                <a href="/list/293426">
                                    线下考察 *****加工厂 经营周转借款</a>
                                <div>
                                    <ul class="l nowlist_2nav">
                                        <li>借款金额：<span class="color3">¥140,000</span></li>
                                        <li><span class="l">信用等级：</span><a href="/credit/wu20120816" title="借入信用：62分(D)"><img src="http://static.ppdai.com/skin/images/xinxin1.gif" width="16" height="16" align="middle" alt=""><img src="http://static.ppdai.com/skin/images/xinxin1.gif" width="16" height="16" align="middle" alt="">(D)</a></li>
                                    </ul>
                                    <ul class="l" style="width: 280px; line-height: 20px; margin-top: 3px;">
                                        <li><span class="l">年利率：</span>
                                            <label class="color3 l" style="width: 97px; display: block;">
                                                16.00%</label>
                                            借款期限：9个月</li>
                                        <li><span class="l">借款进度：</span> <span class="loading" style="border: 1px solid #E2E2E2;
                                            background-color: rgb(226,226,226);"><span style="width: 79%">
                                            </span></span><span class="l" style="margin-right: 5px;">
                                                79%</span>已完成439笔投标</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear">
                        </div>
                        
                        
                        <!--- single around -->
                
ETO;
if($i<9)
{
    echo <<<ETO
<div style="background: url(http://static.ppdai.com/skin/images/dian.png) repeat-x;
                            height: 1px; margin-top: 10px; margin-bottom: 18px; display: block">
                        </div>

ETO;
    
}
}
?>                    
            </div>
        </div>
		<!---公告-->
		<div class="index_center_rightnav1 l">
            <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l">最新公告</span><a href="http://group.ppdai.com/forum.php?mod=announcement" style="color: #999999" class="r">&gt;&gt;更多</a></li>
                <li class="l titright"></li>
            </ul>
            <div class="clear">
            </div>
            <div class="blue_fenge">
            </div>
            
            <div class="list_nav" >
                
                        <ul>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=185">
                            关于“发非提现安全标</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=183">
                            拍拍贷网站社区暂停服务公告</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=182">
                            拍拍贷新版推广计划上线，奖项更...</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=181">
                            拍拍贷有奖推广计划升级在即，旧...</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=180">
                             拍拍贷推出新产品－－网购达人标</a></li>
                    
                        </ul>
                    
            </div>
        </div>
		<!---新手指南-->
		<div class="index_center_rightnav1 l">
            <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l">新手指南</span><a href="http://group.ppdai.com/forum.php?mod=announcement" style="color: #999999" class="r">&gt;&gt;更多</a></li>
                <li class="l titright"></li>
            </ul>
            <div class="clear">
            </div>
            <div class="blue_fenge">
            </div>
            
            <div class="list_nav" >
                
                        <ul>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=185">
                            关于“发非提现安全标</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=183">
                            拍拍贷网站社区暂停服务公告</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=182">
                            拍拍贷新版推广计划上线，奖项更...</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=181">
                            拍拍贷有奖推广计划升级在即，旧...</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=180">
                             拍拍贷推出新产品－－网购达人标</a></li>
                    
                        </ul>
                    
            </div>
        </div>
		<div class="index_bottom_rightnav l">
            <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l ">成功故事</span><a class="r" style="color: #999999" href="http://group.ppdai.com/forum.php?mod=forumdisplay&amp;fid=51">&gt;&gt;更多</a></li>
                <li class="l titright"></li>
            </ul>
            <div class="clear">
            </div>
            <div class="blue_fenge">
            </div>
            <div class="list_nav" style="height:326px;">
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/f3725d12-17b8-4ba4-9b20-4925baeeb0d4_min_50.jpg" width="50" height="50" alt=" 感谢各位拍友，感谢小四，感谢拍拍贷"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=686789&amp;highlight=%E6%84%9F%E8%B0%A2%E5%90%84%E4%BD%8D%E6%8B%8D%E5%8F%8B%EF%BC%8C%E6%84%9F%E8%B0%A2%E5%B0%8F%E5%9B%9B%EF%BC%8C%E6%84%9F%E8%B0%A2%E6%8B%8D%E6%8B%8D%E8%B4%B7" target="_blank" title=" 感谢各位拍友，感谢小四，感谢拍拍贷">感谢各位拍友，感谢小四，. . .</a></li>
                    <li style="line-height: 17px;">主题：面对生活的压力，我不必默默坚持，拍拍贷能够提供优质...</li>
                </ul>
                <div class="clear" style="height: 15px;">
                </div>
				<div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/f3725d12-17b8-4ba4-9b20-4925baeeb0d4_min_50.jpg" width="50" height="50" alt=" 感谢各位拍友，感谢小四，感谢拍拍贷"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=686789&amp;highlight=%E6%84%9F%E8%B0%A2%E5%90%84%E4%BD%8D%E6%8B%8D%E5%8F%8B%EF%BC%8C%E6%84%9F%E8%B0%A2%E5%B0%8F%E5%9B%9B%EF%BC%8C%E6%84%9F%E8%B0%A2%E6%8B%8D%E6%8B%8D%E8%B4%B7" target="_blank" title=" 感谢各位拍友，感谢小四，感谢拍拍贷">感谢各位拍友，感谢小四，. . .</a></li>
                    <li style="line-height: 17px;">主题：面对生活的压力，我不必默默坚持，拍拍贷能够提供优质...</li>
                </ul>
                <div class="clear" style="height: 15px;">
                </div>
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/d84e4418-5d09-415f-87f8-7dc9adefed57_min_50.jpg" width="50" height="50" alt=" 加入拍拍贷5天内，获得20万顺利借入标分享"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=685875&amp;highlight=%E5%8A%A0%E5%85%A5%E6%8B%8D%E6%8B%8D%E8%B4%B75%E5%A4%A9%E5%86%85%EF%BC%8C%E8%8E%B7%E5%BE%9720%E4%B8%87%E9%A1%BA%E5%88%A9%E5%80%9F%E5%85%A5%E6%A0%87%E5%88%86%E4%BA%AB" target="_blank" title=" 加入拍拍贷5天内，获得20万顺利借入标分享">加入拍拍贷5天内，获得20万...</a></li>
                    <li style="line-height: 17px;">主题：我是一名从商者，一开始对拍拍贷的了解并不多，但是全面...</li>
                </ul>
                <div class="clear" style="height: 15px;">
                </div>
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/3fa13201-7300-424c-8ad7-e8ffbdec4906_50.jpg" width="50" height="50" alt=" PPDAI让一个人的诚信变得尤为珍贵！"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=686599&amp;highlight=PPDAI%E8%AE%A9%E4%B8%80%E4%B8%AA%E4%BA%BA%E7%9A%84%E8%AF%9A%E4%BF%A1%E5%8F%98%E5%BE%97%E5%B0%A4%E4%B8%BA%E7%8F%8D%E8%B4%B5%EF%BC%81" target="_blank" title=" PPDAI让一个人的诚信变得尤为珍贵！">PPDAI让一个人的诚信变得尤...</a></li>
                    <li style="line-height: 17px;">主题：我跟老婆几乎没报什么希望在网上借到钱，但是拍拍贷的诚恳... </li>
                </ul>
                <div class="clear" style="height: 15px;">
                </div>
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/bf6af4ec-9f49-4e82-be90-5daba5fbeef7_50.bmp" width="50" height="50" alt=" 被信任的感觉，很好！"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=670506&amp;highlight=%E8%A2%AB%E4%BF%A1%E4%BB%BB%E7%9A%84%E6%84%9F%E8%A7%89%EF%BC%8C%E5%BE%88%E5%A5%BD%EF%BC%81" title="被信任的感觉，很好！">被信任的感觉，很好！</a></li>
                    <li style="line-height: 17px;">主题：互联网时代充斥着很多信任危机,但是我在拍拍贷几次成功...</li>
                </ul>
            </div>
        </div>
		<div class="index_bottom_rightnav l">
            <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l ">成功故事</span><a class="r" style="color: #999999" href="http://group.ppdai.com/forum.php?mod=forumdisplay&amp;fid=51">&gt;&gt;更多</a></li>
                <li class="l titright"></li>
            </ul>
            <div class="clear">
            </div>
            <div class="blue_fenge">
            </div>
            <div class="list_nav">
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/f3725d12-17b8-4ba4-9b20-4925baeeb0d4_min_50.jpg" width="50" height="50" alt=" 感谢各位拍友，感谢小四，感谢拍拍贷"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=686789&amp;highlight=%E6%84%9F%E8%B0%A2%E5%90%84%E4%BD%8D%E6%8B%8D%E5%8F%8B%EF%BC%8C%E6%84%9F%E8%B0%A2%E5%B0%8F%E5%9B%9B%EF%BC%8C%E6%84%9F%E8%B0%A2%E6%8B%8D%E6%8B%8D%E8%B4%B7" target="_blank" title=" 感谢各位拍友，感谢小四，感谢拍拍贷">感谢各位拍友，感谢小四，. . .</a></li>
                    <li style="line-height: 17px;">主题：面对生活的压力，我不必默默坚持，拍拍贷能够提供优质...</li>
                </ul>
                <div class="clear" style="height: 15px;">
                </div>
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/d84e4418-5d09-415f-87f8-7dc9adefed57_min_50.jpg" width="50" height="50" alt=" 加入拍拍贷5天内，获得20万顺利借入标分享"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=685875&amp;highlight=%E5%8A%A0%E5%85%A5%E6%8B%8D%E6%8B%8D%E8%B4%B75%E5%A4%A9%E5%86%85%EF%BC%8C%E8%8E%B7%E5%BE%9720%E4%B8%87%E9%A1%BA%E5%88%A9%E5%80%9F%E5%85%A5%E6%A0%87%E5%88%86%E4%BA%AB" target="_blank" title=" 加入拍拍贷5天内，获得20万顺利借入标分享">加入拍拍贷5天内，获得20万...</a></li>
                    <li style="line-height: 17px;">主题：我是一名从商者，一开始对拍拍贷的了解并不多，但是全面...</li>
                </ul>
                <div class="clear" style="height: 15px;">
                </div>
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/3fa13201-7300-424c-8ad7-e8ffbdec4906_50.jpg" width="50" height="50" alt=" PPDAI让一个人的诚信变得尤为珍贵！"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=686599&amp;highlight=PPDAI%E8%AE%A9%E4%B8%80%E4%B8%AA%E4%BA%BA%E7%9A%84%E8%AF%9A%E4%BF%A1%E5%8F%98%E5%BE%97%E5%B0%A4%E4%B8%BA%E7%8F%8D%E8%B4%B5%EF%BC%81" target="_blank" title=" PPDAI让一个人的诚信变得尤为珍贵！">PPDAI让一个人的诚信变得尤...</a></li>
                    <li style="line-height: 17px;">主题：我跟老婆几乎没报什么希望在网上借到钱，但是拍拍贷的诚恳... </li>
                </ul>
                <div class="clear" style="height: 15px;">
                </div>
                <div class="img_nav l">
                    <img src="http://static.ppdai.com/skin/images/bf6af4ec-9f49-4e82-be90-5daba5fbeef7_50.bmp" width="50" height="50" alt=" 被信任的感觉，很好！"></div>
                <ul class="l" style="width: 180px;">
                    <li style="color: #3469cf"><a href="http://group.ppdai.com/forum.php?mod=viewthread&amp;tid=670506&amp;highlight=%E8%A2%AB%E4%BF%A1%E4%BB%BB%E7%9A%84%E6%84%9F%E8%A7%89%EF%BC%8C%E5%BE%88%E5%A5%BD%EF%BC%81" title="被信任的感觉，很好！">被信任的感觉，很好！</a></li>
                    <li style="line-height: 17px;">主题：互联网时代充斥着很多信任危机,但是我在拍拍贷几次成功...</li>
                </ul>
            </div>
        </div>
		<!--
		<div class="index_center_rightnav2 l">
            <ul>
                <li class="l titleft"></li>
                <li class="l titcenter"><span class="bold l">媒体报道</span><a class="r" style="color: #999999" href="/MediaReports.htm">&gt;&gt;更多</a></li>
                <li class="l titright"></li>
            </ul>
            <div class="clear">
            </div>
            <div class="blue_fenge">
            </div>
            <div class="list_nav">
                <ul>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=185">
                            关于“发非提现安全标</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=183">
                            拍拍贷网站社区暂停服务公告</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=182">
                            拍拍贷新版推广计划上线，奖项更...</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=181">
                            拍拍贷有奖推广计划升级在即，旧...</a></li>
                    
                        <li><a href="http://group.ppdai.com/publicnotice/NoticeContent.aspx?articleid=180">
                             拍拍贷推出新产品－－网购达人标</a></li>
                    
                        </ul>
                    </div>
					</div>
		
		-->
<!--- going list end --->
       

