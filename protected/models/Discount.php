<?php

/**
 * This is the model class for table "zx_discount_company".
 *
 * The followings are the available columns in table 'zx_discount_company':
 * @property integer $id
 * @property string $name
 * @property string $flag
 * @property integer $status
 * @property string $order
 * @property string $litpic
 * @property string $goods
 * @property string $type
 * @property string $linkman
 * @property string $tel
 * @property string $content
 * @property integer $hits
 * @property string $addtime
 * @property string $addip
 */
class Discount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Discount the static model class
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
		return 'zx_discount_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, content', 'required'),
			array('status, hits', 'numerical', 'integerOnly'=>true),
			array('name, flag, addtime, addip', 'length', 'max'=>30),
			array('order', 'length', 'max'=>10),
			array('litpic, goods', 'length', 'max'=>255),
			array('type', 'length', 'max'=>50),
			array('linkman, tel', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, flag, status, order, litpic, goods, type, linkman, tel, content, hits, addtime, addip', 'safe', 'on'=>'search'),
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
			'flag' => 'Flag',
			'status' => 'Status',
			'order' => 'Order',
			'litpic' => 'Litpic',
			'goods' => 'Goods',
			'type' => 'Type',
			'linkman' => 'Linkman',
			'tel' => 'Tel',
			'content' => 'Content',
			'hits' => 'Hits',
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
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('goods',$this->goods,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('linkman',$this->linkman,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}