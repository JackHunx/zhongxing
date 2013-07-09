创建flash based imageUploader
2012-2-18 21:03:53来源：[www.121ask.com]热度：115℃ 【字体：大 中 小】
baidu.flash.imageUploader

创建flash based imageUploader

  语法: baidu.flash.imageUploader(options)  

返回值：<void>

  参数
<Object> 	* createOptions 	创建flash时需要的参数，请参照baidu.swf.create文档
<Object> 	* createOptions.vars 	创建imageUploader时所需要的参数
<Number> 	* createOptions.vars.gridWidth 	每一个预览图片所占的宽度，应该为flash寛的整除
<Number> 	* createOptions.vars.gridHeight 	每一个预览图片所占的高度，应该为flash高的整除
<Number> 	* createOptions.vars.picWidth 	单张预览图片的宽度
<Number> 	* createOptions.vars.picHeight 	单张预览图片的高度
<String> 	   createOptions.vars.uploadDataFieldName 	POST请求中图片数据的key,默认值'picdata'
<String> 	   createOptions.vars.picDescFieldName 	POST请求中图片描述的key,默认值'picDesc'
<Number> 	* createOptions.vars.maxSize 	文件的最大体积,单位'MB'
<Number> 	* createOptions.vars.compressSize 	上传前如果图片体积超过该值，会先压缩
<Number> 	* createOptions.vars.maxNum:32 	最大上传多少个文件
<Number> 	* createOptions.vars.compressLength 	能接受的最大边长，超过该值会等比压缩
<String> 	* createOptions.vars.url 	上传的url地址
<Number> 	   createOptions.vars.mode 	mode == 0时，是使用滚动条，mode == 1时，拉伸flash, 默认值为0
<String> 	* backgroundUrl 	背景图片路径
<String> 	* listBacgroundkUrl 	布局控件背景
<String> 	* buttonUrl 	按钮图片不背景
<String|Function> 	* selectFileCallback 	选择文件的回调
<String|Function> 	* exceedFileCallback文件超出限制的最大体积时的回调 	 
<String|Function> 	* deleteFileCallback 	删除文件的回调
<String|Function> 	* startUploadCallback 	开始上传某个文件时的回调
<String|Function> 	* uploadCompleteCallback 	某个文件上传完成的回调
<String|Function> 	* uploadErrorCallback 	某个文件上传失败的回调
<String|Function> 	* allCompleteCallback 	全部上传完成时的回调
<String|Function> 	* changeFlashHeight 	改变Flash的高度，mode==1的时候才有用