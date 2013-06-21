<?php

/**
 * This is the model class for table "zx_borrow_amount".
 *
 * The followings are the available columns in table 'zx_borrow_amount':
 * @property string $id
 * @property integer $user_id
 * @property string $type
 * @property integer $account
 * @property string $newaccount
 * @property integer $oldaccount
 * @property integer $status
 * @property string $addtime
 * @property string $content
 * @property string $remark
 * @property string $verify_remark
 * @property string $verify_time
 * @property integer $verify_user
 * @property string $addip
 */
class BorrowAmount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BorrowAmount the static model class
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
		return 'zx_borrow_amount';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, remark', 'required'),
			array('user_id, account, oldaccount, status, verify_user', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>20),
			array('newaccount', 'length', 'max'=>11),
			array('addtime, addip', 'length', 'max'=>30),
			array('verify_remark', 'length', 'max'=>255),
			array('verify_time', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, type, account, newaccount, oldaccount, status, addtime, content, remark, verify_remark, verify_time, verify_user, addip', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'account' => 'Account',
			'newaccount' => 'Newaccount',
			'oldaccount' => 'Oldaccount',
			'status' => 'Status',
			'addtime' => 'Addtime',
			'content' => 'Content',
			'remark' => 'Remark',
			'verify_remark' => 'Verify Remark',
			'verify_time' => 'Verify Time',
			'verify_user' => 'Verify User',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('account',$this->account);
		$criteria->compare('newaccount',$this->newaccount,true);
		$criteria->compare('oldaccount',$this->oldaccount);
		$criteria->compare('status',$this->status);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('verify_remark',$this->verify_remark,true);
		$criteria->compare('verify_time',$this->verify_time,true);
		$criteria->compare('verify_user',$this->verify_user);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}