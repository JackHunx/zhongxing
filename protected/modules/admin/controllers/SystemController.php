<?php

class SystemController extends SBaseController
{
    public $layout = '/layouts/admin';
    public function init()
    {
        Yii::app()->clientScript->registerCoreScript('jquery');
    }
    /**
     * set email atmp and user password 
     */
    public function actionEmail()
    {
        if (isset($_POST['email'])) {
            foreach ($_POST['email'] as $key => $val) {
                $model = System::model()->findByPk($key);

                if ($val != $model->value) {
                    $model->attributes = array('value' => $val);
                    $model->update();
                }
            }
        }
        $record = System::model()->findAll('style=:style', array(':style' => '4'));
        for ($i = 0; $i < count($record); $i++) {
            $email[$record[$i]->id] = $record[$i]->value;
        }


        $this->render('email', array('email' => $email));
    }


    public function actionIndex()
    	{
    		$this->render('index');
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
