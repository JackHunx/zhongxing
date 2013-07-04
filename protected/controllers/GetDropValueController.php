<?php

class GetDropValueController extends SBaseController
{
    /**
     * 获取数据参数类 无view层
     * 
     * 
     */
    public function actionNation()
    {
        //database type id = 31
        $record = $this->model('31');

        //获取数组 并重新排序 以汉族为首选
        $value = array();
        for ($i = 0; $i < count($record); $i++) {
            $value[$record[$i]->id] = $record[$i]->value;
        }
        //升序排序 arsort
        ksort($value);
        $nation = 'document.write("<select name=user[nation] id=nation >';
        foreach ($value as $key => $val) {
            $nation .= "<option value='" . $key . "'>" . $val . "</option>";
        }
        $nation .= '</select>");';
        //
        header('Content-Type:application/x-javascript');
        echo $nation;
    }
    //get card type
    public function actionCard()
    {
        //card_type is 32 in table linkage
        $record = $this->model('32');
        $value = array();
        for ($i = 0; $i < count($record); $i++) {
            $value[$record[$i]->value] = $record[$i]->name;
        }
        //升序排序 arsort
        ksort($value);
        $card = 'document.write("<select name=user[cart_type] id=card_type >';
        foreach ($value as $key => $val) {
            $card .= "<option value='" . $key . "'>" . $val . "</option>";
        }
        $card .= '</select>");';
        //
        header('Content-Type:application/x-javascript');
        echo $card;

    }
    public function actionArea()
    {
        if (!isset($_POST['area'])) {
            $record = $this->areaModel('0');
            $value = array();
            for ($i = 0; $i < count($record); $i++) {
                $value[$record[$i]->id] = $record[$i]->name;
            }
            //升序排序 arsort
            ksort($value);
            $area = '<select id="province" name="user[province]"><option>请选择</option>';
            foreach ($value as $key => $val) {
                $area .= '<option value="' . $key . '">' . $val . '</option>';
            }
            $area .= '<select id="province" name="province"><select id="city" name="user[city]"><option value="">请选择</option></select>&nbsp;<select id="area" name="user[area]"><option value="">请选择</option></select>&nbsp;';
            // echo $area;
            header('Content-Type:application/x-javascript');
            $this->areaValue($area);
        } else {
            //echo $_POST['area'];
            $record = $this->areaModel($_POST['area']);
            $value[] = array('id'=>'','name'=>"请选择");
            for ($i = 0; $i < count($record); $i++) {
                $value[] =array('id'=>$record[$i]->id,'name'=>$record[$i]->name);
            }
            echo json_encode($value);
            //升序排序 arsort
            //ksort($value);
//            $area = '[{id:,name:请选择}';
//            foreach($value as $key=>$val)
//            {
//               $area.=',{id:'.$key.',name:'.$val.'}'; 
//            }
//            $area.=']';
            //header('Content-Type:application/x-javascript');
            //echo $area;
        }


    }
    private function areaValue($area)
    {
        echo '
$(document).ready(function (){
    var url =window.location.pathname;
	$("#province").change(function(){
		var province = $(this).val();
		var count = 0;
		$.ajax({
			type:"POST",
			url:url+"/index.php?r=getDropValue/area",
			dataType:\'json\', 
			data:"&area="+province,
			success:function(json){
				$("#city option").each(function(){
					$(this).remove();				 
				});
				$(json).each(function(){
					$("<option value=\'"+json[count].id+"\'>"+json[count].name+"</option>").appendTo("#city");
					count++;
				});
				
			}
		});
	});
	$("#city").change(function(){
		var province = $(this).val();
		var count = 0;
		$.ajax({
            type:"POST",
			url:url+"/index.php?r=getDropValue/area",
			dataType:\'json\', 
			data:"&area="+province,
			success:function(json){
				$("#area option").each(function(){
					$(this).remove();				 
				});
				$(json).each(function(){					
					$("<option value=\'"+json[count].id+"\'>"+json[count].name+"</option>").appendTo("#area");
					count++;
				});
				if(count>0)
				{
					$("#area").show();
				}else
				{
					$("#area").hide();
				}
			}
		});
	});
	$("#area").change(function(){
		
	});
});
document.write(\'' . $area . '\');';
    }
    //area table
    private function areaModel($type)
    {
        $record = Area::model()->findAll('pid=:pid', array(':pid' => $type));
        if ($record == null)
            throw new CException('404 database not have this:' . $type . 'in table Area');
        return $record;
    }
    //linkage table
    private function model($type)
    {
        $record = Linkage::model()->findAll('type_id=:type_id', array(':type_id' => $type));
        if ($record == null)
            throw new CException('404 database not have this:' . $type . 'in table linkage');
        return $record;
    }

    //nothing to do for


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
