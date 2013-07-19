<?php
/**
 * account.php
 * 
 * 用户账户管理类
 * @author Jack mrhu(king.521.love@gmail.com)
 */
class AccountManage
{
    private $_userid; //uerid
    /**
     * the components must need init()
     */
    public function init()
    {
        $this->_userid = Yii::app()->user->id;
        //must need
    }
    /**
     * 初始化
     */
    public function initalize()
    {
        $model = Account::model()->findByPk($this->_userid);
        if ($model == null) {
            $model = new Account;
            $model->attributes = array('user_id' => $this->_userid, );
            if ($model->save()) {
                $logvalue = array(
                    'user_id' => $this->_userid,
                    'type' => 'account_other',
                    'total' => '0',
                    'money' => '0',
                    'addtime' => time(),
                    'addip' => Yii::app()->request->getUserHostAddress(),
                    );
                //save to log
                $this->log($this->_userid, $val);
            } else
                throw new CException('Error');
        }
        return true;
    }
    /**
     * recharge and log
     * @param var $userid
     * @param str $money
     */
    public function recharge($userid, $money)
    {
        $account = $this->getAccount($userid);
        $value = array( //'user_id'=>$userid,
                'total' => $money + $account->total, );
        if ($this->update($accouont->id, $value)) {
            $logvalue = array(
                'user_id' => $userid,
                'type' => 'recharge',
                'total' => $value['total'],
                'money' => $money,
                'addtime' => time(),
                'addip' => Yii::app()->request->getUserHostAddress(),
                );
            //log add return ture of false
            $this->log($this->_userid, $val);
            //return true;

        } else
            return false;
    }
    /**
     * getbank
     */
    public function getBank()
    {

    }
    /**
     * set bank 
     */
    public function setBank()
    {

    }
    /**
     * get log
     * @param array $attributes 查询条件
     */
    public function getLog($attributes = array())
    {
        // User::model()->find
        //当id为null 时查询全部资金流动记录
    }
    /**
     * log
     * @param array $val
     * @return boolean false or ture 
     */
    private function log($val = array())
    {
        $model = new AccountLog;
        $value = array(
            'addtime' => time(),
            'addip' => Yii::app()->request->getUserHostAddress(),
            );
        $model->attributes = array_merge($value, $val);
        if (!$model->save())
            return false;
        return true;
    }
    /**
     * 获取账户个信息
     * @param string $userid
     * @return object account infomation
     */
    public function getAccount($userid)
    {
        $model = Accouont::model()->find('user_id=:user_id', array(':user_id' => $userid));
        if ($model == null) {
            //给初始化此账户
            $model = new Account;
            $model->attributes = array('user_id' => $userid);
            if (!$model->save())
                throw new CException('crete account when get account');
        }
        return $model;
    }
    /**
     * get logType
     * @return value name
     */
    public function logTypeName($type)
    {
        $record = Linkage::model()->findByAttributes(array('type_id' => '30', 'value' =>
                $type));
        return $record->name;
    }
    /**
     * get all logtype
     * @return object 
     */
    public function getAllLogType()
    {
        return Linkage::model()->findAll('type_id=:tppe_id', array(':type_id' => '30'));
    }
    /**
     * 更新账户
     * @param array $val
     * @return boolean true or false
     */
    private function update($id, $val)
    {
        $record = Account::model()->findByPk($id);
        $record->attributes = $val;
        if ($record->update())
            return true;
        else
            return false;
    }
}
