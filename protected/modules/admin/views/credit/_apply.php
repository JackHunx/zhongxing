<div class="notification information png_bg">
				<a href="#" class="close"><img src="<?php echo Yii::app()->baseUrl;?>/images/admin//icons/cross_grey_small.png" title="关闭提示" alt="close" /></a>
				<div>
					审核提示
				</div>
			</div>
            
            <!--- notice end -->
<div class="content-box column-left"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>额度审核</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
				   <form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">用户名:</label>
								<div class="controls">
								 <?php echo User::model()->findByPk($model->user_id)->username;?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">借款类型:</label>
								<div class="controls">
								 <?php if ($model->type == 'tender_vouch')
        echo '投资担保额度';
    elseif ($model->type == 'borrow_vouch')
        echo '借款担保额度';
    else
        echo '借款信用额度';
?>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">原来金额:</label>
								<div class="controls">
								 <?php echo sprintf("%01.2f",$model->account_old);?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">申请额度:</label>
								<div class="controls">
								 <?php echo sprintf("%01.2f",$model->account);?>
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">内容:</label>
								<div class="controls">
								 <?php echo $model->content;?>
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
					
					<h3>审核</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				
					
					<div class="tab-content default-tab" id="tab1">
                    
                   	     
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								
								
								<p>
									<label>审核</label>
									<input type="radio" name="credit[status]" value="1" /> 审核通过
									<input type="radio" name="credit[status]" value="0" checked="checked" /> 审核不通过
								</p>
								
								<p>
									<label>通过额度</label>
										<input class="text-input small-input" type="text" id="small-input" name="credit[account_new]"  value="<?php echo $model->account;?> " /><!-- Classes for input-notification: success, error, information, attention -->
									
								</p>
								
								<p>
									<label>审核备注</label>
									<textarea class="textarea" id="textarea" name="credit[verify_remark]" cols="40" rows="5"></textarea>
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