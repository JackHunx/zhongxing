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
                $this->log($logvalue);
            } else
                throw new CException('Error');
        }
        return true;
    }
    /**
     * recharge and log
     * @param string $userid
     * @param array $value
     * @return boolean true or false
     */
    public function recharge($userid, $value)
    {
        $model = new AccountRecharge;
        $val = array(
            'trade_no' => time() . $userid . rand(1, 999),
            'user_id' => $userid,
            'status' => '0',
            'addtime' => time(),
            'addip' => Yii::app()->request->getUserHostAddress());
        $model->attributes = array_merge($val, $value);
        if ($model->save()) {
            return true;
        } else
            return false;

        //$account = $this->getAccount($userid);
        //        $value = array( //'user_id'=>$userid,
        //                'total' => $money + $account->total, );
        //        if ($this->update($accouont->id, $value)) {
        //            $logvalue = array(
        //                'user_id' => $userid,
        //                'type' => 'recharge',
        //                'total' => $value['total'],
        //                'money' => $money,
        //                'addtime' => time(),
        //                'addip' => Yii::app()->request->getUserHostAddress(),
        //                );
        //            //log add return ture of false
        //            $this->log($this->_userid, $val);
        //            //return true;
        //
        //        } else
        //            return false;
    }
    /**
     * updateAccount and log
     *  account array('*user_id','total','use_money','no_use_money','collection') and * is must need
     * @param  Array $log 
     * @return boolean true or false
     */
    public function updateAccount(array $log)
    {
        //获取当前账户信息

        //$this->log
    }
    /**
     * update recharge
     * 更新recharge 记录
     * @param Array $data
     * @return true or false
     */
    public function updateRecharge($data)
    {
        $record = AccountRecharge::model()->findByPk($data['id']);
        $record->attributes=$data;
        if(!$record->update())
            return false;
        return true;
    }
    /**
     * get payment type
     * @param string $id
     */
    public function getPaymentType($id)
    {
        $type = PaymentType::model()->findByPk($id);
        if ($type == null)
            return '无充值方式';
        else
            return $type->name . '(' . $type->description . ')';
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
        $model = Account::model()->find('user_id=:user_id', array(':user_id' => $userid));
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
     * 资金扣除
     * 
     * 扣除费用 例如 认证费用 vip费用 等待
     * @param array $data array('user_id','type','money','remark')
     * @return boolean true or false
     */
    public function deduct($data)
    {
        //获取account信息
        $account = $this->getAccount($data['user_id']);
        //判段扣除金额不能为负数
        if ($data['money'] < 0)
            return "操作金额不能为负数";
        $log = array(
            'user_id' => $data['user_id'],
            'type' => $data['type'],
            'money' => $data['money'],
            'total' => $account->total - $data['money'],
            'use_money' => $account->use_money - $data['money'],
            'no_use_money' => $account->no_use_money,
            'collection' => $account->collection,
            'to_user' => '0',
            'remark' => $data['remark'],
            );
        $this->log($log);
    }
    /**
     * 更新账户
     * @param array $val=array('user_id'=>'','money'=>'')
     * @return boolean true or false
     */
    private function update(array $val)
    {
        $record = Account::model()->find('user_id=:user_id', array(':user_id' => $val->
                user_id));
        if ($record == null) {
            $model = new Account;
            $model->attributes = array(
                'total' => $val['money'],
                'use_money' => $val['money'],
                'no_use_money' => $val['no_use_money'],
                'collection' => $val['collection'],
                );
            if (!$model->save())
                return false;
            else
                return true;
        }
        //获取当前账户余额
        $record->attributes = array(
            'total' => $val['money'] + $record->total,
            'use_nomey' => $val['money'] + $record->use_money,
            '');
        if (!$record->update())
            return false;
        return false;
        //$record = Account::model()->findByPk($id);
        //        $record->attributes = $val;
        //        if ($record->update())
        //            return true;
        //        else
        //            return false;
    }
}
