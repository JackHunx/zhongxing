<?php

/**
 * This is the model class for table "zx_upfiles".
 *
 * The followings are the available columns in table 'zx_upfiles':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $aid
 * @property integer $status
 * @property integer $user_id
 * @property string $filetype
 * @property string $filename
 * @property integer $filesize
 * @property string $fileurl
 * @property integer $if_cover
 * @property integer $order
 * @property integer $hits
 * @property string $addtime
 * @property string $addip
 * @property string $updatetime
 * @property string $updateip
 */
class Upfiles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Upfiles the static model class
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
		return 'zx_upfiles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, user_id, filesize, if_cover, order, hits', 'numerical', 'integerOnly'=>true),
			array('name, addtime, addip, updatetime, updateip', 'length', 'max'=>30),
			array('code, aid, filetype', 'length', 'max'=>50),
			array('filename', 'length', 'max'=>100),
			array('fileurl', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, code, aid, status, user_id, filetype, filename, filesize, fileurl, if_cover, order, hits, addtime, addip, updatetime, updateip', 'safe', 'on'=>'search'),
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
			'code' => 'Code',
			'aid' => 'Aid',
			'status' => 'Status',
			'user_id' => 'User',
			'filetype' => 'Filetype',
			'filename' => 'Filename',
			'filesize' => 'Filesize',
			'fileurl' => 'Fileurl',
			'if_cover' => 'If Cover',
			'order' => 'Order',
			'hits' => 'Hits',
			'addtime' => 'Addtime',
			'addip' => 'Addip',
			'updatetime' => 'Updatetime',
			'updateip' => 'Updateip',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('aid',$this->aid,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('filetype',$this->filetype,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('filesize',$this->filesize);
		$criteria->compare('fileurl',$this->fileurl,true);
		$criteria->compare('if_cover',$this->if_cover);
		$criteria->compare('order',$this->order);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);
		$criteria->compare('updatetime',$this->updatetime,true);
		$criteria->compare('updateip',$this->updateip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}