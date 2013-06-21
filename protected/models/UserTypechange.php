<?php

/**
 * This is the model class for table "zx_user_typechange".
 *
 * The followings are the available columns in table 'zx_user_typechange':
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property integer $status
 * @property string $old_type
 * @property string $new_type
 * @property string $content
 * @property string $addtime
 * @property string $addip
 */
class UserTypechange extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserTypechange the static model class
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
		return 'zx_user_typechange';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, status', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>50),
			array('old_type, new_type', 'length', 'max'=>10),
			array('content', 'length', 'max'=>255),
			array('addtime, addip', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, username, status, old_type, new_type, content, addtime, addip', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'status' => 'Status',
			'old_type' => 'Old Type',
			'new_type' => 'New Type',
			'content' => 'Content',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('old_type',$this->old_type,true);
		$criteria->compare('new_type',$this->new_type,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}