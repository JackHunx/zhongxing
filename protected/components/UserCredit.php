<?php
/**
 * credit.php 
 *  
 * 用户积分管理
 * @db table credit credit_log credit_rank credit_type
 * @param user_id
 */

class UserCredit
{
    public function init()
    {
        //must need
    }
    /**
     * 初始化
     */
    public function initalize()
    {
        $model = Credit::model()->findByPk(Yii::app()->user->id);
        if ($model == null) {
            $model = new Credit;
            $value = array(
                'user_id' => Yii::app()->user->id,
                'value' => '0',
                'op_user' => Yii::app()->user->id,
                'addtime' => time(),
                'addip' => Yii::app()->request->getUserHostAddress(),
                );
            $value['updatetime'] = $value['addtime'];
            $value['updateip'] = $value['addip'];
            $model->attributes = $value;
            if ($model->save())
                $this->log(array(
                    'user_id' => Yii::app()->user->id,
                    'type_id' => '0',
                    'op' => '1',
                    'value' => '0',
                    'remark' => '注册初始化',
                    'op_user' => Yii::app()->user->id));
            else
                throw new CException('initalize credit save to {credit} error');
        } else
            throw new CException('initalize credit save to {credit} error');

    }
    /**
     * set credit and log 
     * @param $id
     * @param $val use for log function
     * @param credit_value
     */
    public function set($id, $val)
    {
        //获取当前用户积分
        $creditModel = Credit::model()->findByPk($id);
        $credit = $creditModel->value + $val['value'];
        $creditModel->attributes= array(
            // 'user_id'=>$id,
            'value' => $credit,
            //'op_user'=>$val['op_user'],
            'updatetime' => time(),
            'updateip' => Yii::app()->request->userHostAddress,
            );
        //$model = new Credit;
        //echo "<pre>";
//        print_r($creditModel->attributes);
//        exit();
        if ($this->log($val)) {
            if(!$creditModel->update())
                throw new CException('test');
            }


    }
    /**
     * get credit
     * @param user_id
     * @return credit_value
     */
    public function get($userid)
    {
        $value = Credit::model()->findByPk($userid)->value;
        return $value;
    }
    /**
     * get credit rank pic
     * @param $value
     * @return $ranckPic
     */
    public function getRank($value)
    {
        //DAO
        //$sql='select pic from {{credit}} where :value <=point2 and :value >=point1';
        $pic = CreditRank::model()->find(":value <=point2 and :value >=point1 ", array(':value' =>
                $value))->pic;
        if ($pic == null)
            $pic = 'credit_s11.gif';
        return $pic;

    }
    //log credit
    /**
     * $val =array( 'user_id',
     * 'type_id',
     * 'op',//1 增加 2减少
     * 'value',
     * 'ramark',
     * 'op_user',//操作人员
     * )
     */
    private function log($val = array())
    {
        $model = new CreditLog;
        $value = array(
            //'user_id'=>Yii::app()->user->id,
            'addtime' => time(),
            'addip' => Yii::app()->request->getUserHostAddress(),
            );
        $model->attributes = array_merge($value, $val);
        if (!$model->save())
            return false; //throw new CException("save to db error check db {credit_log}");
        return true;
    }
    /**
     * get user credit log 
     * @param $criteria
     * @return object log
     */
    public function getLog($criteria)
    {
        return CreditLog::model()->findAll($criteria);
    }

    /**
     * 返回记录条数
     * @param $userid
     * @return count of log
     */
    public function count($userid)
    {
        return CreditLog::model()->count('user_id=:user_id', array(':user_id' => $userid));

        //count(CreditLog::model()->findAll('user_id=:user_id',array(':user_id'=>$userid)));
    }
    //get type
    public function getTypeName($type)
    {
        $record = CreditType::model()->findByPk($type);
        if ($record != null)
            return $record->name;
        else
            return "系统积分";

    }
}
