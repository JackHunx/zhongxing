<?php

/**
 * This is the model class for table "zx_account_cash".
 *
 * The followings are the available columns in table 'zx_account_cash':
 * @property string $id
 * @property integer $user_id
 * @property integer $status
 * @property string $account
 * @property string $bank
 * @property string $branch
 * @property double $total
 * @property string $credited
 * @property string $fee
 * @property integer $verify_userid
 * @property integer $verify_time
 * @property string $verify_remark
 * @property string $addtime
 * @property string $addip
 */
class AccountCash extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AccountCash the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'zx_account_cash';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, status, verify_userid, verify_time', 'numerical', 'integerOnly'=>true),
			array('total', 'numerical'),
			array('account', 'length', 'max'=>50),
			array('branch', 'length', 'max'=>100),
			array('credited, fee', 'length', 'max'=>20),
			array('verify_remark', 'length', 'max'=>250),
			array('addtime', 'length', 'max'=>11),
			array('addip', 'length', 'max'=>15),
			array('bank', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, status, account, bank, branch, total, credited, fee, verify_userid, verify_time, verify_remark, addtime, addip', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'status' => 'Status',
			'account' => 'Account',
			'bank' => 'Bank',
			'branch' => 'Branch',
			'total' => 'Total',
			'credited' => 'Credited',
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

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('bank',$this->bank,true);
		$criteria->compare('branch',$this->branch,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('credited',$this->credited,true);
		$criteria->compare('fee',$this->fee,true);
		$criteria->compare('verify_userid',$this->verify_userid);
		$criteria->compare('verify_time',$this->verify_time);
		$criteria->compare('verify_remark',$this->verify_remark,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}