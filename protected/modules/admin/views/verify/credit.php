<!-- notice begin -->
<div class="notification information png_bg">
				<a href="#" class="close"><img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/cross_grey_small.png" title="关闭提示" alt="close" /></a>
				<div>
					<font color="red">修改积分记录显示为其他类型,请填写积分说明使积分更加明确。</font>
				</div>
			</div>
            <!--- notice end -->
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>修改积分</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				
					
					<div class="tab-content default-tab" id="tab1">
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								
								
								<p>
									<label>添加积分</label>
									<input type="radio" name="credit[op]" value="1" checked="checked" /> 增加积分
									<input type="radio" name="credit[op]" value="2" /> 减少积分
								</p>
								
								<p>
									<label>积分数值</label>
										<input class="text-input small-input" type="text" id="small-input" name="credit[value]"  value="10" />分<!-- Classes for input-notification: success, error, information, attention -->
									
								</p>
								
								<p>
									<label>积分备注</label>
									<textarea class="textarea" name="credit[remark]" cols="40" rows="5">其他积分</textarea>
								</p>
								
								<p>
                                    <input type="hidden" name="credit[type_id]" value="15" />
                                    <input type="hidden" name="credit[user_id]" value="<?php echo
$_GET['id']; ?>" />
                                    
									<input class="button" type="submit" value="提交" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>