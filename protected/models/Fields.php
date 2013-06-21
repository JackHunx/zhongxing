<?php

/**
 * This is the model class for table "zx_fields".
 *
 * The followings are the available columns in table 'zx_fields':
 * @property string $fields_id
 * @property string $code
 * @property string $name
 * @property string $nid
 * @property string $type
 * @property string $size
 * @property string $input
 * @property string $description
 * @property string $default
 * @property string $select
 * @property integer $order
 */
class Fields extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fields the static model class
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
		return 'zx_fields';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order', 'numerical', 'integerOnly'=>true),
			array('code, name, nid, type, size, input', 'length', 'max'=>50),
			array('description, default', 'length', 'max'=>255),
			array('select', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fields_id, code, name, nid, type, size, input, description, default, select, order', 'safe', 'on'=>'search'),
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
			'fields_id' => 'Fields',
			'code' => 'Code',
			'name' => 'Name',
			'nid' => 'Nid',
			'type' => 'Type',
			'size' => 'Size',
			'input' => 'Input',
			'description' => 'Description',
			'default' => 'Default',
			'select' => 'Select',
			'order' => 'Order',
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

		$criteria->compare('fields_id',$this->fields_id,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nid',$this->nid,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('input',$this->input,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('default',$this->default,true);
		$criteria->compare('select',$this->select,true);
		$criteria->compare('order',$this->order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}