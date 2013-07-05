<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/user'); ?>
<div class="user_right">
		<div class="user_right_menu">
			<ul>
				<li class="title" ><a href="{$_U.query_url}">个人资料</a></li>
				<li {if $_U.query_type=="building"} class="current"{/if}><a href="{$_U.query_url}/building">房产资料</a></li>
				<li {if $_U.query_type=="company"} class="current"{/if}><a href="{$_U.query_url}/company">单位资料</a></li>
				<li {if $_U.query_type=="firm"} class="current"{/if}><a href="{$_U.query_url}/firm">私营业主</a></li>
				<li {if $_U.query_type=="finance"} class="current"{/if}><a href="{$_U.query_url}/finance">财务状况</a></li>
				<li {if $_U.query_type=="contact"} class="current"{/if}><a href="{$_U.query_url}/contact">联系方式</a></li>
				<li {if $_U.query_type=="mate"} class="current"{/if}><a href="{$_U.query_url}/mate">配偶资料</a></li>
				<li {if $_U.query_type=="edu"} class="current"{/if}><a href="{$_U.query_url}/edu">教育背景</a></li>
				<li {if $_U.query_type=="job"} class="current"{/if}><a href="{$_U.query_url}/job">其他</a></li>
			</ul>
		</div>
		
		<div class="user_right_main">
				<!--content 开始-->
		<?php echo $content;?>
		<!--content 结束-->
		
		
		</div>
<!--用户中心的主栏目 结束-->
<div class="footer">
	<p> </p>

	<p><a href="http://www.miibeian.gov.cn/" target="_blank"></a></p>
	<p>众兴投资 Copyright 2011-2015</p>
</div>

</div>
<!-- sidebar -->
</div>
<?php $this->endContent(); ?>