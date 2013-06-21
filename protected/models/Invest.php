<?php

/**
 * This is the model class for table "zx_invest".
 *
 * The followings are the available columns in table 'zx_invest':
 * @property string $id
 * @property integer $site_id
 * @property integer $user_id
 * @property string $name
 * @property integer $status
 * @property integer $order
 * @property integer $hits
 * @property string $litpic
 * @property string $flag
 * @property string $source
 * @property string $publish
 * @property integer $customer
 * @property integer $verify_userid
 * @property string $verify_time
 * @property string $use
 * @property string $time_limit
 * @property string $style
 * @property string $account
 * @property string $apr
 * @property string $lowest_account
 * @property string $most_account
 * @property string $valid_time
 * @property string $award
 * @property string $part_account
 * @property string $funds
 * @property string $is_false
 * @property string $open_account
 * @property string $open_borrow
 * @property string $open_tender
 * @property string $open_credit
 * @property string $content
 * @property string $addtime
 * @property string $addip
 */
class Invest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Invest the static model class
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
		return 'zx_invest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, user_id, status, order, hits, customer, verify_userid', 'numerical', 'integerOnly'=>true),
			array('name, litpic', 'length', 'max'=>255),
			array('flag, source, publish, verify_time, use, time_limit, style, account, apr, lowest_account, most_account, valid_time, award, part_account, funds, is_false, open_account, open_borrow, open_tender, open_credit, addtime, addip', 'length', 'max'=>50),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, user_id, name, status, order, hits, litpic, flag, source, publish, customer, verify_userid, verify_time, use, time_limit, style, account, apr, lowest_account, most_account, valid_time, award, part_account, funds, is_false, open_account, open_borrow, open_tender, open_credit, content, addtime, addip', 'safe', 'on'=>'search'),
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
			'source' => 'Source',
			'publish' => 'Publish',
			'customer' => 'Customer',
			'verify_userid' => 'Verify Userid',
			'verify_time' => 'Verify Time',
			'use' => 'Use',
			'time_limit' => 'Time Limit',
			'style' => 'Style',
			'account' => 'Account',
			'apr' => 'Apr',
			'lowest_account' => 'Lowest Account',
			'most_account' => 'Most Account',
			'valid_time' => 'Valid Time',
			'award' => 'Award',
			'part_account' => 'Part Account',
			'funds' => 'Funds',
			'is_false' => 'Is False',
			'open_account' => 'Open Account',
			'open_borrow' => 'Open Borrow',
			'open_tender' => 'Open Tender',
			'open_credit' => 'Open Credit',
			'content' => 'Content',
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
		$criteria->compare('source',$this->source,true);
		$criteria->compare('publish',$this->publish,true);
		$criteria->compare('customer',$this->customer);
		$criteria->compare('verify_userid',$this->verify_userid);
		$criteria->compare('verify_time',$this->verify_time,true);
		$criteria->compare('use',$this->use,true);
		$criteria->compare('time_limit',$this->time_limit,true);
		$criteria->compare('style',$this->style,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('apr',$this->apr,true);
		$criteria->compare('lowest_account',$this->lowest_account,true);
		$criteria->compare('most_account',$this->most_account,true);
		$criteria->compare('valid_time',$this->valid_time,true);
		$criteria->compare('award',$this->award,true);
		$criteria->compare('part_account',$this->part_account,true);
		$criteria->compare('funds',$this->funds,true);
		$criteria->compare('is_false',$this->is_false,true);
		$criteria->compare('open_account',$this->open_account,true);
		$criteria->compare('open_borrow',$this->open_borrow,true);
		$criteria->compare('open_tender',$this->open_tender,true);
		$criteria->compare('open_credit',$this->open_credit,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}