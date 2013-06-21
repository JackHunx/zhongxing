<?php

/**
 * This is the model class for table "zx_bbs_posts".
 *
 * The followings are the available columns in table 'zx_bbs_posts':
 * @property string $id
 * @property string $tid
 * @property integer $istopic
 * @property string $fid
 * @property string $user_id
 * @property string $username
 * @property string $name
 * @property string $content
 * @property string $edittime
 * @property integer $iscover
 * @property string $isverify
 * @property string $verifydesc
 * @property string $addtime
 * @property string $addip
 */
class Bbs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bbs the static model class
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
		return 'zx_bbs_posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('istopic, iscover', 'numerical', 'integerOnly'=>true),
			array('tid, fid, user_id, edittime', 'length', 'max'=>10),
			array('username', 'length', 'max'=>45),
			array('name', 'length', 'max'=>100),
			array('isverify', 'length', 'max'=>1),
			array('verifydesc', 'length', 'max'=>255),
			array('addtime', 'length', 'max'=>11),
			array('addip', 'length', 'max'=>15),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tid, istopic, fid, user_id, username, name, content, edittime, iscover, isverify, verifydesc, addtime, addip', 'safe', 'on'=>'search'),
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
			'tid' => 'Tid',
			'istopic' => 'Istopic',
			'fid' => 'Fid',
			'user_id' => 'User',
			'username' => 'Username',
			'name' => 'Name',
			'content' => 'Content',
			'edittime' => 'Edittime',
			'iscover' => 'Iscover',
			'isverify' => 'Isverify',
			'verifydesc' => 'Verifydesc',
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
		$criteria->compare('tid',$this->tid,true);
		$criteria->compare('istopic',$this->istopic);
		$criteria->compare('fid',$this->fid,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('edittime',$this->edittime,true);
		$criteria->compare('iscover',$this->iscover);
		$criteria->compare('isverify',$this->isverify,true);
		$criteria->compare('verifydesc',$this->verifydesc,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}