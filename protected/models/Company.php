<?php

/**
 * This is the model class for table "zx_company".
 *
 * The followings are the available columns in table 'zx_company':
 * @property integer $id
 * @property string $name
 * @property integer $site_id
 * @property string $flag
 * @property integer $status
 * @property string $order
 * @property string $litpic
 * @property string $type
 * @property string $percentage
 * @property string $capital
 * @property string $ascendent
 * @property string $quality
 * @property string $sales
 * @property string $staff
 * @property string $foundyear
 * @property string $payment
 * @property string $markets_main
 * @property string $markets_other
 * @property string $replace_work
 * @property string $rdman
 * @property string $engineer
 * @property string $summary
 * @property string $content
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $address
 * @property string $postcode
 * @property string $linkman
 * @property string $email
 * @property string $tel
 * @property string $fax
 * @property string $msn
 * @property string $qq
 * @property integer $hits
 * @property string $addtime
 * @property string $addip
 * @property string $updatetime
 * @property string $updateip
 */
class Company extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Company the static model class
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
		return 'zx_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, site_id, flag, order, percentage, capital, ascendent, sales, staff, foundyear, rdman, engineer', 'required'),
			array('site_id, status, hits', 'numerical', 'integerOnly'=>true),
			array('name, flag, addtime, addip, updatetime, updateip', 'length', 'max'=>30),
			array('order', 'length', 'max'=>10),
			array('litpic, summary', 'length', 'max'=>255),
			array('type, percentage, capital, ascendent, quality, sales, staff, foundyear, payment, markets_main, markets_other, replace_work, rdman, engineer', 'length', 'max'=>50),
			array('province, city, area, linkman', 'length', 'max'=>20),
			array('address, tel', 'length', 'max'=>200),
			array('postcode, email, fax, msn, qq', 'length', 'max'=>100),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, site_id, flag, status, order, litpic, type, percentage, capital, ascendent, quality, sales, staff, foundyear, payment, markets_main, markets_other, replace_work, rdman, engineer, summary, content, province, city, area, address, postcode, linkman, email, tel, fax, msn, qq, hits, addtime, addip, updatetime, updateip', 'safe', 'on'=>'search'),
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
			'site_id' => 'Site',
			'flag' => 'Flag',
			'status' => 'Status',
			'order' => 'Order',
			'litpic' => 'Litpic',
			'type' => 'Type',
			'percentage' => 'Percentage',
			'capital' => 'Capital',
			'ascendent' => 'Ascendent',
			'quality' => 'Quality',
			'sales' => 'Sales',
			'staff' => 'Staff',
			'foundyear' => 'Foundyear',
			'payment' => 'Payment',
			'markets_main' => 'Markets Main',
			'markets_other' => 'Markets Other',
			'replace_work' => 'Replace Work',
			'rdman' => 'Rdman',
			'engineer' => 'Engineer',
			'summary' => 'Summary',
			'content' => 'Content',
			'province' => 'Province',
			'city' => 'City',
			'area' => 'Area',
			'address' => 'Address',
			'postcode' => 'Postcode',
			'linkman' => 'Linkman',
			'email' => 'Email',
			'tel' => 'Tel',
			'fax' => 'Fax',
			'msn' => 'Msn',
			'qq' => 'Qq',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('percentage',$this->percentage,true);
		$criteria->compare('capital',$this->capital,true);
		$criteria->compare('ascendent',$this->ascendent,true);
		$criteria->compare('quality',$this->quality,true);
		$criteria->compare('sales',$this->sales,true);
		$criteria->compare('staff',$this->staff,true);
		$criteria->compare('foundyear',$this->foundyear,true);
		$criteria->compare('payment',$this->payment,true);
		$criteria->compare('markets_main',$this->markets_main,true);
		$criteria->compare('markets_other',$this->markets_other,true);
		$criteria->compare('replace_work',$this->replace_work,true);
		$criteria->compare('rdman',$this->rdman,true);
		$criteria->compare('engineer',$this->engineer,true);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('linkman',$this->linkman,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('msn',$this->msn,true);
		$criteria->compare('qq',$this->qq,true);
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