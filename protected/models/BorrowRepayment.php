<?php

/**
 * This is the model class for table "zx_borrow_repayment".
 *
 * The followings are the available columns in table 'zx_borrow_repayment':
 * @property string $id
 * @property integer $site_id
 * @property integer $status
 * @property integer $webstatus
 * @property integer $order
 * @property integer $borrow_id
 * @property string $repayment_time
 * @property string $repayment_yestime
 * @property string $repayment_account
 * @property string $repayment_yesaccount
 * @property integer $late_days
 * @property string $late_interest
 * @property string $interest
 * @property string $capital
 * @property string $forfeit
 * @property string $reminder_fee
 * @property string $addtime
 * @property string $addip
 */
class BorrowRepayment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BorrowRepayment the static model class
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
		return 'zx_borrow_repayment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, status, webstatus, order, borrow_id, late_days', 'numerical', 'integerOnly'=>true),
			array('repayment_time, repayment_yestime, repayment_account, repayment_yesaccount, interest, capital, forfeit, reminder_fee, addtime, addip', 'length', 'max'=>50),
			array('late_interest', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, status, webstatus, order, borrow_id, repayment_time, repayment_yestime, repayment_account, repayment_yesaccount, late_days, late_interest, interest, capital, forfeit, reminder_fee, addtime, addip', 'safe', 'on'=>'search'),
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
			'status' => 'Status',
			'webstatus' => 'Webstatus',
			'order' => 'Order',
			'borrow_id' => 'Borrow',
			'repayment_time' => 'Repayment Time',
			'repayment_yestime' => 'Repayment Yestime',
			'repayment_account' => 'Repayment Account',
			'repayment_yesaccount' => 'Repayment Yesaccount',
			'late_days' => 'Late Days',
			'late_interest' => 'Late Interest',
			'interest' => 'Interest',
			'capital' => 'Capital',
			'forfeit' => 'Forfeit',
			'reminder_fee' => 'Reminder Fee',
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
		$criteria->compare('status',$this->status);
		$criteria->compare('webstatus',$this->webstatus);
		$criteria->compare('order',$this->order);
		$criteria->compare('borrow_id',$this->borrow_id);
		$criteria->compare('repayment_time',$this->repayment_time,true);
		$criteria->compare('repayment_yestime',$this->repayment_yestime,true);
		$criteria->compare('repayment_account',$this->repayment_account,true);
		$criteria->compare('repayment_yesaccount',$this->repayment_yesaccount,true);
		$criteria->compare('late_days',$this->late_days);
		$criteria->compare('late_interest',$this->late_interest,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('capital',$this->capital,true);
		$criteria->compare('forfeit',$this->forfeit,true);
		$criteria->compare('reminder_fee',$this->reminder_fee,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}