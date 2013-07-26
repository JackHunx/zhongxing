<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>图片查看</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">

<?php Yii::app()->clientScript->registerCoreScript('jquerr');?>
<SCRIPT src="<?php echo Yii::app()->baseUrl;?>/js/image/artZoom.js" type=text/javascript></SCRIPT>
<LINK href="<?php echo Yii::app()->baseUrl;?>/js/image/artZoom.css" type=text/css rel=stylesheet>
<STYLE type=text/css>BODY {
	FONT-SIZE: 75%; FONT-FAMILY: '微软雅黑'
}
IMG {
	BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
P {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-TOP: 0px
}
UL {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-TOP: 0px
}
UL {
	LIST-STYLE-TYPE: none
}
OL {
	LIST-STYLE-TYPE: none
}
LI {
	LIST-STYLE-TYPE: none
}
#about {
	PADDING-BOTTOM: 20px; WIDTH: 550px; BORDER-BOTTOM: #ccc 1px solid
}
#about .planeart {
	COLOR: #ccc
}
#about .planeart A {
	COLOR: #ccc
}
UL.imgList {
	WIDTH: 550px
}
UL.imgList LI {
	MARGIN-TOP: 10px
}
</STYLE>

<META content="MSHTML 6.00.2900.5969" name=GENERATOR></HEAD>
<BODY>
<DIV id=about>
<DIV class=content>
<h2><font color="red">提示：图片点击后可以旋转,图片点击后左上角有旋转按钮</font></h2>

<A class="miniImg artZoom" href="<?php echo $image;?>" rel=images/b.jpg><IMG id="zoom_01" src="<?php echo $image;?>"></A> </BODY></HTML>
<script>
    $("#zoom_01").elevateZoom({
  zoomType				: "inner",
  cursor: "crosshair"
});
</script>