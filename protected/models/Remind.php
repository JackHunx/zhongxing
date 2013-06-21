<?php

/**
 * This is the model class for table "zx_remind".
 *
 * The followings are the available columns in table 'zx_remind':
 * @property integer $id
 * @property string $name
 * @property string $nid
 * @property integer $status
 * @property integer $order
 * @property integer $type_id
 * @property integer $message
 * @property integer $email
 * @property integer $phone
 * @property integer $addtime
 * @property string $addip
 */
class Remind extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Remind the static model class
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
		return 'zx_remind';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, order, type_id, message, email, phone, addtime', 'numerical', 'integerOnly'=>true),
			array('name, nid', 'length', 'max'=>50),
			array('addip', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, nid, status, order, type_id, message, email, phone, addtime, addip', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'nid' => 'Nid',
			'status' => 'Status',
			'order' => 'Order',
			'type_id' => 'Type',
			'message' => 'Message',
			'email' => 'Email',
			'phone' => 'Phone',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nid',$this->nid,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('order',$this->order);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('message',$this->message);
		$criteria->compare('email',$this->email);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('addtime',$this->addtime);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}