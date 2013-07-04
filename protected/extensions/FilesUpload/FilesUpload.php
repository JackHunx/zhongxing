<?php
/**
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */
 class FilesUpload extends CWidget{
    
    public $version = "1.0";
    public $id="filesUpload";
    public $config=array();
    public $css = null;    
    public function run(){
        //验证配置文件
        if(empty($this->config['request']['endpoint']))
        {
            //endpoint 为请求地址
             throw new CException('FilesUploader: param "request endpoin cannot be empty."');
        }
        if(empty($this->config['validation']['allowedExtensions']))
        {
            //endpoint 为请求地址
            //$this->config['validation']['allowedExtensions'] = "*.jpg";
             throw new CException('FilesUploader: param "validation:allowedExtensions" cannot be empty."');
        }
        $config = array(
        
            
        );
        
        //合并config
        $config =array_merge($config,$this->config);
        //加载assets文件
        $assets = dirname(__FILE__).'/assets';
        $baseUrl = Yii::app()->assetManager->publish($assets);
        $jsfile =  $baseUrl."/jquery.filesupload-{$this->version}.js";
       
        //Yii::app()->clientScript->registerScriptFile('jquery',CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile($jsfile,CClientScript::POS_HEAD);
        $this->css = (!empty($this->css)?$this->css:$baseUrl."/filesupload-{$this->version}.css");
        Yii::app()->clientScript->registerCssFile($this->css);
        //加载试图文件
        $this->render("index",array('config'=>$config));
    }
    
    
    
    
 }
 
 