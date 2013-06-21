<?php

/**
 * This is the model class for table "zx_scrollpic".
 *
 * The followings are the available columns in table 'zx_scrollpic':
 * @property integer $id
 * @property integer $site_id
 * @property integer $status
 * @property integer $order
 * @property integer $flag
 * @property integer $type_id
 * @property string $url
 * @property string $name
 * @property string $pic
 * @property string $summary
 * @property integer $hits
 * @property integer $addtime
 * @property string $addip
 */
class Scrollpic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Scrollpic the static model class
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
		return 'zx_scrollpic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, status, order, flag, type_id, hits, addtime', 'numerical', 'integerOnly'=>true),
			array('url', 'length', 'max'=>60),
			array('name', 'length', 'max'=>100),
			array('pic', 'length', 'max'=>200),
			array('summary', 'length', 'max'=>250),
			array('addip', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, status, order, flag, type_id, url, name, pic, summary, hits, addtime, addip', 'safe', 'on'=>'search'),
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
			'status' => 'Status',
			'order' => 'Order',
			'flag' => 'Flag',
			'type_id' => 'Type',
			'url' => 'Url',
			'name' => 'Name',
			'pic' => 'Pic',
			'summary' => 'Summary',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('order',$this->order);
		$criteria->compare('flag',$this->flag);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('addtime',$this->addtime);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}