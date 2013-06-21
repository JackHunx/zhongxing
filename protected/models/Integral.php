<?php

/**
 * This is the model class for table "zx_integral".
 *
 * The followings are the available columns in table 'zx_integral':
 * @property integer $id
 * @property integer $site_id
 * @property string $name
 * @property double $need
 * @property integer $number
 * @property integer $ex_number
 * @property integer $province
 * @property integer $city
 * @property integer $area
 * @property string $litpic
 * @property string $content
 * @property integer $hits
 * @property integer $top
 * @property string $flag
 * @property string $order
 * @property integer $status
 * @property string $addtime
 * @property string $addip
 */
class Integral extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Integral the static model class
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
		return 'zx_integral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, number, ex_number, province, city, area, hits, top, status', 'numerical', 'integerOnly'=>true),
			array('need', 'numerical'),
			array('name, litpic', 'length', 'max'=>100),
			array('flag, addtime, addip', 'length', 'max'=>30),
			array('order', 'length', 'max'=>10),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, name, need, number, ex_number, province, city, area, litpic, content, hits, top, flag, order, status, addtime, addip', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'need' => 'Need',
			'number' => 'Number',
			'ex_number' => 'Ex Number',
			'province' => 'Province',
			'city' => 'City',
			'area' => 'Area',
			'litpic' => 'Litpic',
			'content' => 'Content',
			'hits' => 'Hits',
			'top' => 'Top',
			'flag' => 'Flag',
			'order' => 'Order',
			'status' => 'Status',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('need',$this->need);
		$criteria->compare('number',$this->number);
		$criteria->compare('ex_number',$this->ex_number);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city);
		$criteria->compare('area',$this->area);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('top',$this->top);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}