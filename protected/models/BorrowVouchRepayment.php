<?php

/**
 * This is the model class for table "zx_borrow_vouch_repayment".
 *
 * The followings are the available columns in table 'zx_borrow_vouch_repayment':
 * @property string $id
 * @property integer $status
 * @property integer $user_id
 * @property integer $borrow_id
 * @property integer $order
 * @property string $repay_time
 * @property string $repay_yestime
 * @property string $repay_account
 * @property string $repay_yesaccount
 * @property string $addtime
 * @property string $addip
 */
class BorrowVouchRepayment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BorrowVouchRepayment the static model class
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
		return 'zx_borrow_vouch_repayment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, user_id, borrow_id, order', 'numerical', 'integerOnly'=>true),
			array('repay_time, repay_yestime, repay_account, repay_yesaccount, addtime, addip', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, status, user_id, borrow_id, order, repay_time, repay_yestime, repay_account, repay_yesaccount, addtime, addip', 'safe', 'on'=>'search'),
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
			'status' => 'Status',
			'user_id' => 'User',
			'borrow_id' => 'Borrow',
			'order' => 'Order',
			'repay_time' => 'Repay Time',
			'repay_yestime' => 'Repay Yestime',
			'repay_account' => 'Repay Account',
			'repay_yesaccount' => 'Repay Yesaccount',
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
		$criteria->compare('status',$this->status);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('borrow_id',$this->borrow_id);
		$criteria->compare('order',$this->order);
		$criteria->compare('repay_time',$this->repay_time,true);
		$criteria->compare('repay_yestime',$this->repay_yestime,true);
		$criteria->compare('repay_account',$this->repay_account,true);
		$criteria->compare('repay_yesaccount',$this->repay_yesaccount,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}