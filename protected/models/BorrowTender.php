<?php

/**
 * This is the model class for table "zx_borrow_tender".
 *
 * The followings are the available columns in table 'zx_borrow_tender':
 * @property string $id
 * @property integer $site_id
 * @property integer $user_id
 * @property integer $status
 * @property integer $borrow_id
 * @property string $money
 * @property string $account
 * @property string $repayment_account
 * @property string $interest
 * @property string $repayment_yesaccount
 * @property string $wait_account
 * @property string $wait_interest
 * @property string $repayment_yesinterest
 * @property string $addtime
 * @property string $addip
 */
class BorrowTender extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BorrowTender the static model class
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
		return 'zx_borrow_tender';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, user_id, status, borrow_id', 'numerical', 'integerOnly'=>true),
			array('money, repayment_account, repayment_yesaccount, repayment_yesinterest, addtime, addip', 'length', 'max'=>50),
			array('account', 'length', 'max'=>10),
			array('interest, wait_account, wait_interest', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, user_id, status, borrow_id, money, account, repayment_account, interest, repayment_yesaccount, wait_account, wait_interest, repayment_yesinterest, addtime, addip', 'safe', 'on'=>'search'),
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
			'site_id' => 'Site',
			'user_id' => 'User',
			'status' => 'Status',
			'borrow_id' => 'Borrow',
			'money' => 'Money',
			'account' => 'Account',
			'repayment_account' => 'Repayment Account',
			'interest' => 'Interest',
			'repayment_yesaccount' => 'Repayment Yesaccount',
			'wait_account' => 'Wait Account',
			'wait_interest' => 'Wait Interest',
			'repayment_yesinterest' => 'Repayment Yesinterest',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('borrow_id',$this->borrow_id);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('repayment_account',$this->repayment_account,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('repayment_yesaccount',$this->repayment_yesaccount,true);
		$criteria->compare('wait_account',$this->wait_account,true);
		$criteria->compare('wait_interest',$this->wait_interest,true);
		$criteria->compare('repayment_yesinterest',$this->repayment_yesinterest,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}