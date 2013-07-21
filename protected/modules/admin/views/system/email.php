<div class="content-box column-left"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>邮箱设置</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				
					
					<div class="tab-content default-tab" id="tab1">
                    
                   	     
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>SMTP服务器：</label>
										<input class="text-input medium-input" type="text" id="medium-input" name="email[37]"  value="<?php echo $email['37'];?>" /><br />(例如:<font color="red">如不清楚请咨询邮件服务商</font>)<!-- Classes for input-notification: success, error, information, attention -->
									
								</p>
								
								
								<p>
									<label>SMTP服务器是否需要验证：</label>
									<input type="radio" name="email[38]" value="1" <?php echo $email['38']==1?'checked="checked" ':''?>/>是
                                    <input type="radio" name="email[38]" value="0" <?php echo $email['38']==0?'checked="checked" ':''?>/> 否
								</p>
								
								<p>
									<label>邮箱地址</label>
										<input class="text-input medium-input" type="text" id="medium-input" name="email[39]"  value="<?php echo $email['39'];?>" /><br /><!-- Classes for input-notification: success, error, information, attention -->
									
								</p>
								
								<p>
									<label>邮箱密码</label>
                                    	<input class="text-input medium-input" type="password" id="medium-input" name="email[40]"  value="<?php echo $email['40'];?>" />
									
								</p>
                                <p>
									<label>发件人Email</label>
                                    	<input class="text-input medium-input" type="text" id="medium-input" name="email[41]"  value="<?php echo $email['41'];?>" />
									
								</p>
                                <p>
									<label>发件人姓名</label>
                                    	<input class="text-input medium-input" type="text" id="medium-input" name="email[42]"  value="<?php echo $email['42'];?>" />
									
								</p>
								
								<p>
									<input class="button" type="submit" value="修改" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>