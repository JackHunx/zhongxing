<?php

/**
 * This is the model class for table "zx_borrow_line".
 *
 * The followings are the available columns in table 'zx_borrow_line':
 * @property string $id
 * @property integer $site_id
 * @property integer $user_id
 * @property string $name
 * @property integer $status
 * @property integer $order
 * @property integer $hits
 * @property string $litpic
 * @property string $flag
 * @property integer $type
 * @property integer $borrow_use
 * @property integer $borrow_qixian
 * @property integer $province
 * @property integer $city
 * @property integer $area
 * @property string $account
 * @property string $content
 * @property string $pawn
 * @property string $tel
 * @property string $sex
 * @property string $xing
 * @property integer $verify_user
 * @property string $verify_time
 * @property string $verify_remark
 * @property string $addtime
 * @property string $addip
 */
class BorrowLine extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BorrowLine the static model class
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
		return 'zx_borrow_line';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, user_id, status, order, hits, type, borrow_use, borrow_qixian, province, city, area, verify_user', 'numerical', 'integerOnly'=>true),
			array('name, litpic, verify_remark', 'length', 'max'=>255),
			array('flag, verify_time, addtime, addip', 'length', 'max'=>50),
			array('account, xing', 'length', 'max'=>11),
			array('pawn, sex', 'length', 'max'=>2),
			array('tel', 'length', 'max'=>15),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, user_id, name, status, order, hits, litpic, flag, type, borrow_use, borrow_qixian, province, city, area, account, content, pawn, tel, sex, xing, verify_user, verify_time, verify_remark, addtime, addip', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'name' => 'Name',
			'status' => 'Status',
			'order' => 'Order',
			'hits' => 'Hits',
			'litpic' => 'Litpic',
			'flag' => 'Flag',
			'type' => 'Type',
			'borrow_use' => 'Borrow Use',
			'borrow_qixian' => 'Borrow Qixian',
			'province' => 'Province',
			'city' => 'City',
			'area' => 'Area',
			'account' => 'Account',
			'content' => 'Content',
			'pawn' => 'Pawn',
			'tel' => 'Tel',
			'sex' => 'Sex',
			'xing' => 'Xing',
			'verify_user' => 'Verify User',
			'verify_time' => 'Verify Time',
			'verify_remark' => 'Verify Remark',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('order',$this->order);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('borrow_use',$this->borrow_use);
		$criteria->compare('borrow_qixian',$this->borrow_qixian);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city);
		$criteria->compare('area',$this->area);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('pawn',$this->pawn,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('xing',$this->xing,true);
		$criteria->compare('verify_user',$this->verify_user);
		$criteria->compare('verify_time',$this->verify_time,true);
		$criteria->compare('verify_remark',$this->verify_remark,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}