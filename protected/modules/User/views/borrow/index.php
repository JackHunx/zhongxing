
<link href="<?php echo Yii::app()->baseUrl;?>/css/borrow_new.css" rel="stylesheet" type="text/css" />



<!--借款是怎么发生的 结束-->

<div class="con_box t10"><img border="0" usemap="#Map" src="<?php echo Yii::app()->baseUrl;?>/images/banner3.jpg"></div>





<div class="wrap950 list_1">

	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif" /> 借款流程</div>

<div class="m_l_bor"><div style="width: 900px; height: 100px; padding-left: 20px;" class="process">

            <ul style="width: 900px;">

            <li><a href="<?php echo Yii::app()->createUrl('user/register');?>">注册</a></li>

			<li><a href="<?php echo Yii::app()->createUrl('User/validate/realname');?>">实名认证</a></li>

			<li><a href="<?php echo Yii::app()->createUrl('User/info');?>">填写个人资料</a></li>

			<li><a href="<?php echo Yii::app()->createUrl('User/upload');?>">上传资料证明    </a></li>

			<li><a href="<?php echo Yii::app()->createUrl('User/borrow/create');?>">发布借款标</a></li>

			<li><a href="/index.php?user&amp;q=code/borrow/repayment">借款成功</a></li>

			<li><a href="/index.php?user&amp;q=code/borrow/loandetail">每月还款</a></li>

            </ul>

        </div>

       </div>	

</div>

<!--借款是怎么发生的 结束-->



<!--借款帮助 开始-->

<div class="wrap950 list_1">

	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif" /> 用户帮助中心</div>

	<div class="content">

		<ul class="list_li_1">

		{loop module="article" function="GetList" limit="16" site_id="10"}

			<li ><a href="/{$var.site_nid}/a{$var.id}.html">{$var.name} </a></li>

			{/loop}

		</ul>

	</div>

	<div class="foot"></div>

</div>

<!--借款帮助 结束-->



<!--注意事项 开始-->

<div class="wrap950 list_1">

	<div class="title"><img src="<?php echo Yii::app()->baseUrl;?>/images/ico_4.gif"  /> 借款须知</div>

	<div class="content">

		<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <th align="left">借款者必须具备的基本条件 </th>

  </tr>

  <tr>

    <td align="left">1、注册成为会员 </td>

  </tr>

  <tr>

    <td align="left">2、申请成为VIP会员 </td>

  </tr>

  <tr>

    <td align="left">3、工作收入或经营稳定 </td>

  </tr>

  <tr>

    <td align="left">4、具有明确的借款用途</td>

  </tr>

  <tr>

    <td align="left">5、填写详细的个人信息，并提供最少三个紧急联系人 </td>

  </tr>

  <tr>

    <td align="left">6、通过全部的基本认证 </td>

  </tr>

  <tr>

    <td align="left">&nbsp;</td>

  </tr>

  <tr>

    <th align="left">借款者需要提供的资料 </th>

  </tr>

  <tr>

    <td align="left">◆<strong>基本资料</strong>：身份证、户口本、住址证明、信用报告、银行流水、手机清单。</td>

  </tr>

  <tr>

    <td align="left">&bull; 住址证明：要求有个人住址的水电物业单、纸质固话账单、纸质信用卡账单等收件资料的扫描件，且需提供相应的房产证、按揭合同或租赁合同。地址证明3个月更新1次。</td>

  </tr>

  <tr>

    <td align="left">&bull; 手机清单：具有正常的呼出呼入记录，未经排序、筛选连贯的通讯记录。手机通话清单可以去营业厅打印后扫描，也可以在网上查询截图，截图时要求包含手机号。清单更新要求每月1次。</td>

  </tr>

  <tr>

    <td align="left">&bull; 信用报告: 个人征信报告需要在当地的人民银行打印，需要原件扫描上传。信用报告要求6个月更新1次。</td>

  </tr>

  <tr>

    <td align="left">&bull; 银行流水: 要求必须有近3个月完整的流水。若是工薪收入者，银行流水必须包含银行代发工资的记录。若是个体工商户或是企业主，必须提供经营企业的银行流水，以及企业账目。</td>

  </tr>

  <tr>

    <td align="left">&nbsp;</td>

  </tr>

  <tr>

    <td align="left">◆<strong>辅助材料</strong>: 工作证明资料、能力证明材料、经营主体资质、经营业绩资料等，结婚证、房产、车产等资产证明文件。</td>

  </tr>

  <tr>

    <td align="left">&bull; 房产：包含房产证、购房发票、按揭合同、抵押合同、还款账户银行流水，若是自住房产，包含水电清单。</td>

  </tr>

  <tr>

    <td align="left">&bull; 车产：包含车辆登记证、行驶证、驾驶证，购车发票等。</td>

  </tr>

  <tr>

    <td align="left">&nbsp;</td>

  </tr>

  <tr>

    <td align="left">◆<strong>其他联系人</strong>：直系亲属以及同事、朋友等至少3名以上联络人姓名、联系电话。（直系亲属身份证明应包含身份证、户口本的扫描件及电话。若为配偶的，必须提供结婚证）。</td>

  </tr>

  <tr>

    <td align="left">由于借款人的个人资信状况不同，所需要提供的辅助资料会有所差异。若会员希望获得更高资信评级，就应提供更详细的信息。若审核有特殊要求时需要即时提供近期更新。 </td>

  </tr>

      </table>

</div>

	<div class="foot"></div>

</div>

<!--注意事项 结束-->
