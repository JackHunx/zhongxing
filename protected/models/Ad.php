<?php

/**
 * This is the model class for table "zx_ad".
 *
 * The followings are the available columns in table 'zx_ad':
 * @property string $id
 * @property string $nid
 * @property integer $order
 * @property string $name
 * @property string $litpic
 * @property integer $timelimit
 * @property string $firsttime
 * @property string $endtime
 * @property string $content
 * @property string $endcontent
 * @property string $addtime
 * @property string $addip
 */
class Ad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ad the static model class
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
		return 'zx_ad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, endcontent', 'required'),
			array('order, timelimit', 'numerical', 'integerOnly'=>true),
			array('nid, firsttime, endtime', 'length', 'max'=>20),
			array('name, litpic', 'length', 'max'=>100),
			array('addtime, addip', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nid, order, name, litpic, timelimit, firsttime, endtime, content, endcontent, addtime, addip', 'safe', 'on'=>'search'),
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
			'nid' => 'Nid',
			'order' => 'Order',
			'name' => 'Name',
			'litpic' => 'Litpic',
			'timelimit' => 'Timelimit',
			'firsttime' => 'Firsttime',
			'endtime' => 'Endtime',
			'content' => 'Content',
			'endcontent' => 'Endcontent',
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
		$criteria->compare('nid',$this->nid,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('timelimit',$this->timelimit);
		$criteria->compare('firsttime',$this->firsttime,true);
		$criteria->compare('endtime',$this->endtime,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('endcontent',$this->endcontent,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}