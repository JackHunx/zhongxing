<?php

/**
 * This is the model class for table "zx_limitapp".
 *
 * The followings are the available columns in table 'zx_limitapp':
 * @property string $id
 * @property integer $user_id
 * @property integer $status
 * @property integer $order
 * @property string $account
 * @property string $recommend_userid
 * @property string $content
 * @property string $other_content
 * @property integer $verify_userid
 * @property string $verify_time
 * @property string $verify_remark
 * @property string $addtime
 * @property string $addip
 */
class Limitapp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Limitapp the static model class
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
		return 'zx_limitapp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, status, order, verify_userid', 'numerical', 'integerOnly'=>true),
			array('account, recommend_userid', 'length', 'max'=>255),
			array('verify_time, verify_remark, addtime, addip', 'length', 'max'=>50),
			array('content, other_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, status, order, account, recommend_userid, content, other_content, verify_userid, verify_time, verify_remark, addtime, addip', 'safe', 'on'=>'search'),
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
			'order' => 'Order',
			'account' => 'Account',
			'recommend_userid' => 'Recommend Userid',
			'content' => 'Content',
			'other_content' => 'Other Content',
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
		$criteria->compare('order',$this->order);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('recommend_userid',$this->recommend_userid,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('other_content',$this->other_content,true);
		$criteria->compare('verify_userid',$this->verify_userid);
		$criteria->compare('verify_time',$this->verify_time,true);
		$criteria->compare('verify_remark',$this->verify_remark,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}