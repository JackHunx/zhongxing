

			<div id="centernav" class="sitewrapper" style="background-color: white; border: 1px solid #D8D8D8;">
        <div class="login_top" style="text-align: left; height: 40px; padding-left: 20px;
            font-weight: bold; color: Black; font-size: 15px; line-height: 20px;">
            用户登录
        </div>
        <div class="login_right" style="color: #808080; line-height: 20px; margin-top: 15px;">
            <span style="font-size: 18px; font-weight: bold;">您还不是会员？</span>
            <br>
            <br>
            Something<br>
            Something<br>
            somethis<br>
            Something<br>
            Something<br>
            <br>
            <div>
                <a href="<?php echo Yii::app()->baseUrl.'/index.php?r=user/register'; ?>" onclick="addtrack(&quot;/login/google&quot;);">
                    <img src="http://static.ppdai.com/skin/images/register_n_button.gif" height="30" border="0" alt=""></a>
            </div>
        </div>
        <div class="login_left">
            <form name="LoginForm" method="post" action="<?php echo Yii::app()->baseUrl.'/index.php?r=site/login';?>" id="form1">
<div>

</div>

<div>


</div>
            <div style="width: 560px; margin: 0 auto;">
                <div style="padding: 20px 0 0; margin-left: 30px;">
                    <table align="center" cellpadding="3" cellspacing="3" style="width: 481px">
                        <tbody><tr style="height: 56px; vertical-align: top">
                            <td class="style1" align="right">
                                用户名：
                            </td>
                            <td class="style2">
                                <input name="LoginForm[username]" type="text" value="test3" id="txtUserName" class="lsls" onfocus="changeborder(this)" onblur="changeborder2(this)" style="height:26px;width:280px;border-width:1px; border-color:LightGray;">
                                <span id="_txtUserName" class="red"></span>
                            </td>
                        </tr>
                        <tr style="height: 46px; vertical-align: top">
                            <td class="style1" align="right">
                                密 码：
                            </td>
                            <td class="style2">
                                <input name="LoginForm[password]" type="password" maxlength="50" id="txtPassword" onfocus="changeborder(this)" onblur="changeborder2(this)" style="height: 26px; width: 280px; border-width: 1px; border-color: rgb(204, 204, 204);">
                                <span id="_txtPassword" class="red" style="line-height: 10px"><a href="#" onclick="addtrack(&quot;/login/forgetpassword&quot;);">忘记密码？</a></span>
                                <input name="LoginForm[rememberMe]" type="hidden"/>
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
                            <!--
                            <input type="submit" name="yt0" value="登陆">
                            -->
                                <input type="image" name="btnLogin" id="btnLogin" src="http://static.ppdai.com/skin/images/login_n_button.gif" alt="登录" style="border-width:0px;width:85px;height:28px;">&nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td  style="font-size: 12px; color: #808080;" colspan="2">
                                <br>
                                <br>
                                使用合作伙伴账号登录
                            </td>
                        </tr>
                        <tr>
						<!--
                            <td class="gray" colspan="2">
                                <a class="gray" href="" class="alipay" title="支付宝会员登录" onclick="javascript:addtrack(&quot;/login/qucikAlipay&quot;);">
                                    支付宝登录</a> &nbsp;&nbsp;&nbsp; <a href="" class="qq" title="QQ登录" onclick="javascript:addtrack(&quot;/login/qq&quot;);">QQ登录</a>
                                &nbsp;&nbsp;&nbsp; <a href="" class="otherlog" title="财付通会员登录" onclick="javascript:addtrack(&quot;/login/tenpay&quot;);">
                                    财付通会员登录</a>
                                <div style="margin-top: 5px;">
                                    <a href="" class="renren" title="人人网账号登录" onclick="javascript:addtrack(&quot;/login/renren&quot;);">
                                        人人网账号登录</a> &nbsp;&nbsp;&nbsp; <a href="" class="sina" title="Sina微博账号登录" onclick="javascript:addtrack(&quot;/login/sina&quot;);">
                                            Sina微博账号登录</a> &nbsp;&nbsp;&nbsp; <a href="" class="googlelog" title="Google帐号直接登录" onclick="javascript:addtrack(&quot;/login/google&quot;);">
                                                Google帐号直接登录</a>
                                </div>
                            </td>
							--->
                        </tr>
                    </tbody></table>
                </div>
            </div>
            <input type="hidden" name="HiddenField1" id="HiddenField1" value="http://www.ppdai.com/">
            </form>
        </div>
        <p>
    </p></div>

