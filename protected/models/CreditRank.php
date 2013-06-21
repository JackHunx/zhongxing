<?php

/**
 * This is the model class for table "zx_credit_rank".
 *
 * The followings are the available columns in table 'zx_credit_rank':
 * @property integer $id
 * @property string $name
 * @property integer $rank
 * @property integer $point1
 * @property integer $point2
 * @property string $pic
 * @property string $remark
 * @property integer $addtime
 * @property string $addip
 */
class CreditRank extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CreditRank the static model class
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
		return 'zx_credit_rank';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rank, point1, point2, addtime', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('pic', 'length', 'max'=>100),
			array('addip', 'length', 'max'=>30),
			array('remark', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, rank, point1, point2, pic, remark, addtime, addip', 'safe', 'on'=>'search'),
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
			'rank' => 'Rank',
			'point1' => 'Point1',
			'point2' => 'Point2',
			'pic' => 'Pic',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('rank',$this->rank);
		$criteria->compare('point1',$this->point1);
		$criteria->compare('point2',$this->point2);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('addtime',$this->addtime);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}