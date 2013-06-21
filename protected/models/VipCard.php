<?php

/**
 * This is the model class for table "zx_vip_card".
 *
 * The followings are the available columns in table 'zx_vip_card':
 * @property integer $id
 * @property string $flag
 * @property string $order
 * @property string $city
 * @property string $serial_number
 * @property integer $batch
 * @property string $password
 * @property integer $create_time
 * @property integer $start_date
 * @property integer $end_date
 * @property integer $is_up_end_date
 * @property string $vct_name
 * @property integer $month_num
 * @property integer $open_time
 * @property integer $status
 * @property integer $freeze_time
 * @property integer $freeze_day
 * @property integer $freeze_times
 * @property integer $stop_time
 * @property integer $stop_day
 * @property integer $stop_times
 * @property string $create_user
 * @property string $remark
 * @property integer $hits
 * @property string $addtime
 * @property string $addip
 * @property string $updatetime
 * @property string $updateip
 */
class VipCard extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VipCard the static model class
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
		return 'zx_vip_card';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('flag, serial_number, batch, password, create_user', 'required'),
			array('batch, create_time, start_date, end_date, is_up_end_date, month_num, open_time, status, freeze_time, freeze_day, freeze_times, stop_time, stop_day, stop_times, hits', 'numerical', 'integerOnly'=>true),
			array('flag, addtime, addip, updatetime, updateip', 'length', 'max'=>30),
			array('order', 'length', 'max'=>10),
			array('city, password', 'length', 'max'=>50),
			array('serial_number', 'length', 'max'=>15),
			array('vct_name', 'length', 'max'=>40),
			array('create_user', 'length', 'max'=>20),
			array('remark', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, flag, order, city, serial_number, batch, password, create_time, start_date, end_date, is_up_end_date, vct_name, month_num, open_time, status, freeze_time, freeze_day, freeze_times, stop_time, stop_day, stop_times, create_user, remark, hits, addtime, addip, updatetime, updateip', 'safe', 'on'=>'search'),
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
			'flag' => 'Flag',
			'order' => 'Order',
			'city' => 'City',
			'serial_number' => 'Serial Number',
			'batch' => 'Batch',
			'password' => 'Password',
			'create_time' => 'Create Time',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'is_up_end_date' => 'Is Up End Date',
			'vct_name' => 'Vct Name',
			'month_num' => 'Month Num',
			'open_time' => 'Open Time',
			'status' => 'Status',
			'freeze_time' => 'Freeze Time',
			'freeze_day' => 'Freeze Day',
			'freeze_times' => 'Freeze Times',
			'stop_time' => 'Stop Time',
			'stop_day' => 'Stop Day',
			'stop_times' => 'Stop Times',
			'create_user' => 'Create User',
			'remark' => 'Remark',
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
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('serial_number',$this->serial_number,true);
		$criteria->compare('batch',$this->batch);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('start_date',$this->start_date);
		$criteria->compare('end_date',$this->end_date);
		$criteria->compare('is_up_end_date',$this->is_up_end_date);
		$criteria->compare('vct_name',$this->vct_name,true);
		$criteria->compare('month_num',$this->month_num);
		$criteria->compare('open_time',$this->open_time);
		$criteria->compare('status',$this->status);
		$criteria->compare('freeze_time',$this->freeze_time);
		$criteria->compare('freeze_day',$this->freeze_day);
		$criteria->compare('freeze_times',$this->freeze_times);
		$criteria->compare('stop_time',$this->stop_time);
		$criteria->compare('stop_day',$this->stop_day);
		$criteria->compare('stop_times',$this->stop_times);
		$criteria->compare('create_user',$this->create_user,true);
		$criteria->compare('remark',$this->remark,true);
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