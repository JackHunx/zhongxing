<?php

/**
 * This is the model class for table "zx_account_recharge".
 *
 * The followings are the available columns in table 'zx_account_recharge':
 * @property string $id
 * @property string $trade_no
 * @property integer $user_id
 * @property integer $status
 * @property string $money
 * @property string $payment
 * @property string $return
 * @property string $type
 * @property string $remark
 * @property string $fee
 * @property integer $verify_userid
 * @property string $verify_time
 * @property string $verify_remark
 * @property string $addtime
 * @property string $addip
 */
class AccountRecharge extends CActiveRecord
{
    //public $verifyCode;
    public $username;
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return AccountRecharge the static model class
     */
    public static function model($className = __class__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'zx_account_recharge';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array(
            //                'verifyCode',
            //                'captcha',
            //                //'on'=>'User/account/recharge',
            //                'allowEmpty' => !CCaptcha::checkRequirements()),
            array(
                'user_id, status, verify_userid',
                'numerical',
                'integerOnly' => true),
            array(
                'trade_no',
                'length',
                'max' => 20),
            array(
                'money, type, fee',
                'length',
                'max' => 10),
            array(
                'payment',
                'length',
                'max' => 100),
            array(
                'remark, verify_remark',
                'length',
                'max' => 250),
            array(
                'verify_time, addtime',
                'length',
                'max' => 11),
            array(
                'addip',
                'length',
                'max' => 15),
            array('return', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array(
                'id, trade_no, user_id, status, money, payment, return, type, remark, fee, verify_userid, verify_time, verify_remark, addtime, addip,username',
                'safe',
                'on' => 'search'),
            );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array('user' => array(
                self::BELONGS_TO,
                'User',
                'user_id',
                ), );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'username',
            'id' => 'ID',
            'trade_no' => 'Trade No',
            'user_id' => 'User',
            'status' => 'Status',
            'money' => 'Money',
            'payment' => 'Payment',
            'return' => 'Return',
            'type' => 'Type',
            'remark' => 'Remark',
            'fee' => 'Fee',
            'verify_userid' => 'Verify Userid',
            'verify_time' => 'Verify Time',
            'verify_remark' => 'Verify Remark',
            'addtime' => 'Addtime',
            'addip' => 'Addip',
            );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;
        $criteria->with=array('user');
        $criteria->alias='prefix';
        $criteria->compare('user.username',$this->username,true);
        $criteria->compare('id', $this->id, true);
        $criteria->compare('trade_no', $this->trade_no, true);
        $criteria->compare('prefix.user_id', $this->user_id);
        $criteria->compare('prefix.status', $this->status);
        $criteria->compare('money', $this->money, true);
        $criteria->compare('payment', $this->payment, true);
        $criteria->compare('return', $this->return, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('remark', $this->remark, true);
        $criteria->compare('fee', $this->fee, true);
        $criteria->compare('verify_userid', $this->verify_userid);
        $criteria->compare('verify_time', $this->verify_time, true);
        $criteria->compare('verify_remark', $this->verify_remark, true);
        $criteria->compare('addtime', $this->addtime, true);
        $criteria->compare('addip', $this->addip, true);

        return new CActiveDataProvider($this, array(
                    'pagination'=>array('pageSize'=>15,),
                    'sort'=>array(
                        'defaultOrder'=>'id DESC',
                        'attributes'=>array(
                            'username'=>array(
                                'asc'=>'user.username',
                                'desc'=>'user.username DESC',
                            ),
                        ),
                        
                    ),  
                    'criteria' => $criteria, 
                    ));
    }
}
