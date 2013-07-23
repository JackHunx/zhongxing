<!-- notice begin -->

<div class="notification information png_bg">
				<a href="#" class="close"><img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/cross_grey_small.png" title="关闭提示" alt="close" /></a>
				<div>
					审核提示
				</div>
			</div>
            <?php if($model->status ==0){?>
            <!--- notice end -->
<div class="content-box column-left"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>充值信息</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
				   <form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">用户名:</label>
								<div class="controls">
								 <?php echo $username;?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">充值类型:</label>
								<div class="controls">
								 <?php echo $model->type=1?'网上充值':'线下充值';?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">支付方式:</label>
								<div class="controls">
								 <?php echo Yii::app()->account->getPaymentType($model->payment);?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">充值总额:</label>
								<div class="controls">
								 <?php echo $model->money;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">费用:</label>
								<div class="controls">
								 <?php echo $model->fee;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">实际到账:</label>
								<div class="controls">
								 <font color="red"><?php echo sprintf("%01.2f", $model->money - $model->fee);?> </font>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">用户备注:</label>
								<div class="controls">
								 <?php echo $model->remark;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">流水号:</label>
								<div class="controls">
								 <?php echo $model->trade_no;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">状态:</label>
								<div class="controls">
								 <font color = "red">未审核</font>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">添加时间/IP:</label>
								<div class="controls">
								 <?php echo date("Y-m-d H:i:s",$model->addtime).'/'.$model->addip;?>
								</div>
							  </div>
                              </fieldset>
                              </form>
					
				</div> <!-- End .content-box-content -->
				
			</div>
            <div class="content-box column-right"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>充值审核</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				
					
					<div class="tab-content default-tab" id="tab1">
                    
                   	     
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								
								
								<p>
									<label>审核</label>
									<input type="radio" name="Account[status]" value="1" checked="checked" /> 审核通过
									<input type="radio" name="Account[status]" value="2" /> 审核不通过
								</p>
								
								<p>
									<label>实际到账</label>
										<input class="text-input small-input" type="text" id="small-input" name="Account[money]"  value="<?php echo $model->money;?> " />元<!-- Classes for input-notification: success, error, information, attention -->
									
								</p>
								
								<p>
									<label>审核备注</label>
									<textarea class="textarea" id="textarea" name="Account[verify_remark]" cols="40" rows="5"></textarea>
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
   <?php }else{ ?>
   <div class="content-box column-left"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>充值信息</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
				   <form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">用户名:</label>
								<div class="controls">
								 <?php echo $username;?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">充值类型:</label>
								<div class="controls">
								 <?php echo $model->type==1?'网上充值':'线下充值';?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">支付方式:</label>
								<div class="controls">
								 <?php echo Yii::app()->account->getPaymentType($model->payment);?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">充值总额:</label>
								<div class="controls">
								 <?php echo $model->money;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">费用:</label>
								<div class="controls">
								 <?php echo $model->fee;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">实际到账:</label>
								<div class="controls">
								 <font color="red"><?php echo sprintf("%01.2f", $model->money - $model->fee);?> </font>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">用户备注:</label>
								<div class="controls">
								 <?php echo $model->remark;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">流水号:</label>
								<div class="controls">
								 <?php echo $model->trade_no;?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">状态:</label>
								<div class="controls">
								 
                                 <?php echo $model->status==1?'<font color="green">充值成功</font>':'充值失败';?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">添加时间/IP:</label>
								<div class="controls">
								 <?php echo date("Y-m-d H:i:s",$model->addtime).'/'.$model->addip;?>
								</div>
							  </div>
                              </fieldset>
                              </form>
					
				</div> <!-- End .content-box-content -->
				
			</div><?php }?>