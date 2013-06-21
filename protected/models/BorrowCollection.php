<?php

/**
 * This is the model class for table "zx_borrow_collection".
 *
 * The followings are the available columns in table 'zx_borrow_collection':
 * @property string $id
 * @property integer $site_id
 * @property integer $status
 * @property integer $order
 * @property integer $tender_id
 * @property string $repay_time
 * @property string $repay_yestime
 * @property string $repay_account
 * @property string $repay_yesaccount
 * @property string $interest
 * @property string $capital
 * @property integer $late_days
 * @property string $late_interest
 * @property string $addtime
 * @property string $addip
 */
class BorrowCollection extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BorrowCollection the static model class
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
		return 'zx_borrow_collection';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, status, order, tender_id, late_days', 'numerical', 'integerOnly'=>true),
			array('repay_time, repay_yestime, repay_account, repay_yesaccount, interest, capital, addtime, addip', 'length', 'max'=>50),
			array('late_interest', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, status, order, tender_id, repay_time, repay_yestime, repay_account, repay_yesaccount, interest, capital, late_days, late_interest, addtime, addip', 'safe', 'on'=>'search'),
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
			'order' => 'Order',
			'tender_id' => 'Tender',
			'repay_time' => 'Repay Time',
			'repay_yestime' => 'Repay Yestime',
			'repay_account' => 'Repay Account',
			'repay_yesaccount' => 'Repay Yesaccount',
			'interest' => 'Interest',
			'capital' => 'Capital',
			'late_days' => 'Late Days',
			'late_interest' => 'Late Interest',
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
		$criteria->compare('order',$this->order);
		$criteria->compare('tender_id',$this->tender_id);
		$criteria->compare('repay_time',$this->repay_time,true);
		$criteria->compare('repay_yestime',$this->repay_yestime,true);
		$criteria->compare('repay_account',$this->repay_account,true);
		$criteria->compare('repay_yesaccount',$this->repay_yesaccount,true);
		$criteria->compare('interest',$this->interest,true);
		$criteria->compare('capital',$this->capital,true);
		$criteria->compare('late_days',$this->late_days);
		$criteria->compare('late_interest',$this->late_interest,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}