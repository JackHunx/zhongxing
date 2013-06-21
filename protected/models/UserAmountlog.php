<?php

/**
 * This is the model class for table "zx_user_amountlog".
 *
 * The followings are the available columns in table 'zx_user_amountlog':
 * @property string $id
 * @property integer $user_id
 * @property string $type
 * @property string $amount_type
 * @property string $account
 * @property string $account_all
 * @property string $account_use
 * @property string $account_nouse
 * @property string $remark
 * @property string $addtime
 * @property string $addip
 */
class UserAmountlog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserAmountlog the static model class
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
		return 'zx_user_amountlog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('remark', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('type, amount_type, addtime, addip', 'length', 'max'=>50),
			array('account, account_all, account_use, account_nouse', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, type, amount_type, account, account_all, account_use, account_nouse, remark, addtime, addip', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'type' => 'Type',
			'amount_type' => 'Amount Type',
			'account' => 'Account',
			'account_all' => 'Account All',
			'account_use' => 'Account Use',
			'account_nouse' => 'Account Nouse',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('amount_type',$this->amount_type,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('account_all',$this->account_all,true);
		$criteria->compare('account_use',$this->account_use,true);
		$criteria->compare('account_nouse',$this->account_nouse,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}