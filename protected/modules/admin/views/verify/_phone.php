<!-- notice begin -->
<div class="notification information png_bg">
				<a href="#" class="close"><img src="<?php echo Yii::app()->baseUrl; ?>/images/admin//icons/cross_grey_small.png" title="关闭提示" alt="close" /></a>
				<div>
					审核提示
				</div>
			</div>
            <!--- notice end -->
<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>手机认证</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				
					
					<div class="tab-content default-tab" id="tab1">
					
						<form action="<?php echo Yii::app()->baseUrl; ?>/index.php?r=admin/verify" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
									<p>
									<label>手机号码：<font color = "blue"><?php echo User::model()->findByPk($_GET['id'])->phone;?></font></label>
									
								</p>
								
								<p>
									<label>审核</label>
									<input type="radio" name="validate[status]" value="1" checked="checked" /> 审核通过
									<input type="radio" name="validate[status]" value="0" /> 审核不通过
								</p>
								
								<p>
									<label>通过积分</label>
										<input class="text-input small-input" type="text" id="small-input" name="validate[credit]"  value="15" />分<!-- Classes for input-notification: success, error, information, attention -->
									
								</p>
								
								<p>
									<label>审核备注</label>
									<textarea class="textarea" name="validate[remark]" cols="40" rows="5">手机认证</textarea>
								</p>
								
								<p>
                                    <input type="hidden" name="validate[type_id]" value="3" />
                                    <input type="hidden" name="validate[id]" value="<?php echo
$_GET['id']; ?>" />
                                    <input type="hidden" name="cate" value="phone_status" />
									<input class="button" type="submit" value="提交" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div>