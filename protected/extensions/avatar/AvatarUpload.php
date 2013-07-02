<?php
/**
 * 头像上传 基于flash
 * 
 * 
 * 生成三个文件 big small original 文件
 * 
 * 
 */
class AvatarUpload extends CWidget
{

    public $version = "1.0";
    public $id = "avatarUpload";
    public $config = array();
    public $css = null;
    public function run()
    {
        //加载assets文件
        $assets = dirname(__file__) . '/assets';
        $baseUrl = Yii::app()->assetManager->publish($assets);
        $jsfile = $baseUrl . "/avatarupload-{$this->version}.js";

        //Yii::app()->clientScript->registerScriptFile('jquery',CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScriptFile($jsfile, CClientScript::POS_HEAD);
        
        //加载试图文件
        $this->render("index", array('baseUrl'=>$baseUrl));
    }
}
