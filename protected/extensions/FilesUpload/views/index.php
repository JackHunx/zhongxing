<div id="tabBodys" class="tabbody">
    <div style="z-index: 200;" id="local" class="panel">
        <div id="flashContainer">
     <object id="flash" name="flash" codeBase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="793" align="middle" height="272">
                <param name="_cx" value="16086">
                <param name="_cy" value="7196">
                
                <param name="movie" value="imageuploader.swf">
                <param name="src" value="imageuploader.swf">
                <param name="wmode" value="window">
                <param name="play" value="0">
                <param name="loop" value="-1">
                <param name="quality" value="high">
                <param name="salign" value="lt">
                <param name="menu" value="-1">
                <param name="base" value="">
                <param name="allowscriptaccess" value="">
                <param name="scale" value="noscale">
                <param name="devicefont" value="0">
                <param name="embedmovie" value="0">
                <param name="bgcolor" value="">
                <param name="swremote" value="">
                <param name="moviedata" value="">
                <param name="seamlesstabbing" value="1">
                <param name="profile" value="0">
                <param name="profileaddress" value="">
                <param name="profileport" value="0">
                <param name="allownetworking" value="all">
                <param name="allowfullscreen" value="false">
                <param name="allowfullscreeninteractive" value="">
                <param name="isdependent" value="0">
                <param name="wmode" value="window">
                <param name="movie" value="imageUploader.swf">
                <param name="flashvars" value="container=flashContainer&amp;url=<?php echo $config['request']['endpoint']; ?>&amp;ext=%7B%22param1%22%3A%22value1%22%2C%20%22param2%22%3A%22value2%22%7D&amp;fileType=%7B%22description%22%3A%22%E5%9B%BE%E7%89%87%22%2C%20%22extension%22%3A%22<?php echo urlencode($config['validation']['allowedExtensions']);?>%22%7D&amp;flashUrl=imageUploader.swf&amp;width=608&amp;height=272&amp;gridWidth=121&amp;gridHeight=120&amp;picWidth=100&amp;picHeight=100&amp;uploadDataFieldName=upfile&amp;picDescFieldName=pictitle&amp;maxSize=10&amp;compressSize=10&amp;maxNum=32&amp;compressSide=0&amp;compressLength=3000">
                <embed height="272" name="flash" type="application/x-shockwave-flash" align="middle" pluginspage="http://www.macromedia.com/go/getflashplayer" width="608" src="imageUploader.swf" flashvars="container=flashContainer&url=<?php echo $config['request']['endpoint']; ?>&ext=%7B%22param1%22%3A%22value1%22%2C%20%22param2%22%3A%22value2%22%7D&amp;fileType=%7B%22description%22%3A%22%E5%9B%BE%E7%89%87%22%2C%20%22extension%22%3A%22<?php echo urlencode($config['validation']['allowedExtensions']);?>%22%7D&amp;flashUrl=imageUploader.swf&amp;width=608&amp;height=272&amp;gridWidth=121&amp;gridHeight=120&amp;picWidth=100&amp;picHeight=100&amp;uploadDataFieldName=upfile&amp;picDescFieldName=pictitle&amp;maxSize=10 &amp;compressSize=10&amp;maxNum=32&amp;compressSide=0&amp;compressLength=3000" ver="10.0.0" wmode="window" errorMessage="Flash插件初始化失败，请更新您的FlashPlayer版本之后重试！">
           </object>
        </div>
        <div><div style='float:left; margin-left:5px; background: url("images/upload.png");' id="upload"></div><a id="reload"style="display: none;" onclick="location.reload()">点此继续上传</a></div>
    </div>
    <iframe style="display: none; z-index: 1;" id="maskIframe" src="about:blank" frameBorder="no" scrolling="no"></iframe>
</div>