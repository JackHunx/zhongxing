<!-- notice begin -->
<div class="notification information png_bg">
				<a href="#" class="close"><img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/cross_grey_small.png" title="关闭提示" alt="close" /></a>
				<div>
					审核提示
				</div>
			</div>
            <!--- notice end -->
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>实名认证</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				
					
					<div class="tab-content default-tab" id="tab1">
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								
								
								<p>
									<label>审核</label>
									<input type="radio" name="User[status]" value="1" checked="checked" /> 审核通过
									<input type="radio" name="User[status]" value="0" /> 审核不通过
								</p>
								
								<p>
									<label>通过积分</label>
										<input class="text-input small-input" type="text" id="small-input" name="User[value]"  value="15" />分<!-- Classes for input-notification: success, error, information, attention -->
									
								</p>
								
								<p>
									<label>审核备注</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="User[remark]" cols="79" rows="15">实名认证</textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="提交" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>