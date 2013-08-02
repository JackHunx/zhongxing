<?php

class SiteController extends Controller
{
    public $layout = '/layouts/admin';
    //init
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    public function actionIndex()
    {
        
        $this->render('index');
    }
    /**
     * scroll pic manager
     */
    public function actionScroll()
    {
        $record = Site::model()->find('nid=:nid', array(':nid' => 'scroll'));
        if(isset($_POST['scroll']))
        {
            $record->content=json_encode($_POST['scroll']);
            if(!$record->update())
                throw new CException('error to update scroll');
        }
        //get scroll pic from db
        
        if ($record !== null) {
            $scroll= json_decode($record->content, true);
            //print_r($record);
        }else
            throw new CException('error scroll');
        $this->render('scroll',array('scroll'=>$scroll));
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
