<?php

class CreditController extends SBaseController
{
    public $layout = '/layouts/user';

    public function init()
    {
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile(Yii::app()->baseUrl . '/js/base.js');
        $cs->registerScriptFile(Yii::app()->baseUrl . '/js/validate_tab.js');
        $cs->registerScriptFile(Yii::app()->baseUrl .
            '/js/My97DatePicker/WdatePicker.js');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user_new.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/index.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/main_user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/user.css');
        $cs->registerCssFile(Yii::app()->baseUrl . '/css/css.css');
        //Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/validate/user.css');
    }
    public function actionIndex()
    {
        //分页获取用户积分记录
        $criteria=new CDbCriteria;
        $count = Yii::app()->credit->count(Yii::app()->user->id);
        //设置分页
        $pages = new CPagination($count);
        $pages->pageSize=10;
        $pages->applyLimit($criteria);
        //数据库查询条件
        $criteria->addCondition('user_id=:user_id');
        $criteria->params[':user_id']=Yii::app()->user->id;
        $criteria->order='addtime DESC';
        $criteria->limit=$pages->pageSize;
        $criteria->offset=$pages->currentPage*$pages->pageSize;
        $record=Yii::app()->credit->getLog($criteria);
        
        
        
        //s$record=Yii::app()->credit->getLog(Yii::app()->user->id);
        $log=array();
        for($i=0;$i<count($record);$i++)
        {
            $log[$record[$i]->id]=array(
                'typeName'=>Yii::app()->credit->getTypeName($record[$i]->type_id),  
                'value'=>$record[$i]->value,
                'remark'=>$record[$i]->remark
            );
        }
        krsort($log);
        
        $this->render('index',array('log'=>$log,'pages'=>$pages));
    }
    
    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
    // return the filter configuration for this controller, e.g.:
    return array(
    'inlineFilterName',
    array(
    'class'=>'path.to.FilterClass',
    'propertyName'=>'propertyValue',
    ),
    );
    }

    public function actions()
    {
    // return external action classes, e.g.:
    return array(
    'action1'=>'path.to.ActionClass',
    'action2'=>array(
    'class'=>'path.to.AnotherActionClass',
    'propertyName'=>'propertyValue',
    ),
    );
    }
    */
}
