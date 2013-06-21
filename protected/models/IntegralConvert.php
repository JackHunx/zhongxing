<?php

/**
 * This is the model class for table "zx_integral_convert".
 *
 * The followings are the available columns in table 'zx_integral_convert':
 * @property integer $id
 * @property integer $integral_id
 * @property integer $user_id
 * @property integer $number
 * @property integer $need
 * @property integer $integral
 * @property integer $status
 * @property string $remark
 * @property string $addtime
 * @property string $addip
 */
class IntegralConvert extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IntegralConvert the static model class
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
		return 'zx_integral_convert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('integral_id, user_id, number, need, integral, status', 'numerical', 'integerOnly'=>true),
			array('remark', 'length', 'max'=>200),
			array('addtime, addip', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, integral_id, user_id, number, need, integral, status, remark, addtime, addip', 'safe', 'on'=>'search'),
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
			'integral_id' => 'Integral',
			'user_id' => 'User',
			'number' => 'Number',
			'need' => 'Need',
			'integral' => 'Integral',
			'status' => 'Status',
			'remark' => 'Remark',
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
		$criteria->compare('integral_id',$this->integral_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('number',$this->number);
		$criteria->compare('need',$this->need);
		$criteria->compare('integral',$this->integral);
		$criteria->compare('status',$this->status);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}