<?php
/**
 * progress bar 
 * 
 * Progress Bar use to show the information about you rate,
 * @author Jack(king.521.love@gmail.com)
 * 
 */
 class ProgressBar extends CWidget
 {
    //百分比 X 100
    public $params;
    public $style='blue';//red blue and yellow three color default is yellow
    //before initialze
    public function init()
    {
        //register css adn js file
        $assets = dirname(__FILE__).'/assets';
        $baseUrl = Yii::app()->assetManager->publish($assets);
        $jsfile = $baseUrl.'/progressbar.js';
        $cssfile = $baseUrl.'/progressbar.css';
        Yii::app()->clientScript->registerScriptFile($jsfile,CClientScript::POS_END);
        Yii::app()->clientScript->registerCssFile($cssfile);
    }
    public function run()
    {
        $this->render('progressbar');
    }
 }
 ?>