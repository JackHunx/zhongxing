<?php

/**
 * This is the model class for table "zx_discount".
 *
 * The followings are the available columns in table 'zx_discount':
 * @property integer $id
 * @property integer $site_id
 * @property string $litpic
 * @property string $type
 * @property string $business_district
 * @property integer $company_id
 * @property string $name
 * @property integer $province
 * @property integer $city
 * @property integer $area
 * @property string $address
 * @property string $tag
 * @property string $start_date
 * @property string $end_date
 * @property string $comment
 * @property integer $hit
 * @property integer $top
 * @property string $remark
 * @property string $post_user
 * @property string $flag
 * @property string $order
 * @property integer $status
 * @property string $addtime
 * @property string $addip
 * @property string $updatetime
 * @property string $updateip
 */
class D extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return D the static model class
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
		return 'zx_discount';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type', 'required'),
			array('site_id, company_id, province, city, area, hit, top, status', 'numerical', 'integerOnly'=>true),
			array('litpic', 'length', 'max'=>255),
			array('type, address, post_user', 'length', 'max'=>50),
			array('business_district, start_date, end_date, flag, addtime, addip, updatetime, updateip', 'length', 'max'=>30),
			array('name, tag', 'length', 'max'=>100),
			array('order', 'length', 'max'=>10),
			array('comment, remark', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, litpic, type, business_district, company_id, name, province, city, area, address, tag, start_date, end_date, comment, hit, top, remark, post_user, flag, order, status, addtime, addip, updatetime, updateip', 'safe', 'on'=>'search'),
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
			'litpic' => 'Litpic',
			'type' => 'Type',
			'business_district' => 'Business District',
			'company_id' => 'Company',
			'name' => 'Name',
			'province' => 'Province',
			'city' => 'City',
			'area' => 'Area',
			'address' => 'Address',
			'tag' => 'Tag',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'comment' => 'Comment',
			'hit' => 'Hit',
			'top' => 'Top',
			'remark' => 'Remark',
			'post_user' => 'Post User',
			'flag' => 'Flag',
			'order' => 'Order',
			'status' => 'Status',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('business_district',$this->business_district,true);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city);
		$criteria->compare('area',$this->area);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('hit',$this->hit);
		$criteria->compare('top',$this->top);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('post_user',$this->post_user,true);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);
		$criteria->compare('updatetime',$this->updatetime,true);
		$criteria->compare('updateip',$this->updateip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}