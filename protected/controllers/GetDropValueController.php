<?php

class GetDropValueController extends SBaseController
{
    public function actionNation()
    {
        //database type id = 31
        $record = Linkage::model()->findAll('type_id=:type_id', array(':type_id' => '31'));
       
        //获取数组 并重新排序 以汉族为首选
        $value=array();
        for($i=0;$i<count($record);$i++)
        {
            $value[$record[$i]->id]=$record[$i]->value;
        }
        //升序排序 arsort
        ksort($value);
        $nation='document.write("<select name=nation id=nation >';
        foreach($value as $key =>$val)
        {
           $nation.="<option value='".$key."'>".$val."</option>";
        }
        $nation.='</select>");';
//        
        
        echo $nation;
        }
        public function actionIndex()
        {
            //$this->render('index');
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
