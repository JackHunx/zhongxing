<?php

/**
 * This is the model class for table "zx_borrow_vouch".
 *
 * The followings are the available columns in table 'zx_borrow_vouch':
 * @property string $id
 * @property integer $user_id
 * @property integer $borrow_id
 * @property integer $status
 * @property string $account
 * @property string $vouch_account
 * @property string $content
 * @property string $award_fund
 * @property string $award_account
 * @property string $addtime
 * @property string $addip
 */
class BorrowVouch extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BorrowVouch the static model class
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
		return 'zx_borrow_vouch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content', 'required'),
			array('user_id, borrow_id, status', 'numerical', 'integerOnly'=>true),
			array('account', 'length', 'max'=>20),
			array('vouch_account, award_account', 'length', 'max'=>11),
			array('award_fund', 'length', 'max'=>10),
			array('addtime, addip', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, borrow_id, status, account, vouch_account, content, award_fund, award_account, addtime, addip', 'safe', 'on'=>'search'),
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
			'borrow_id' => 'Borrow',
			'status' => 'Status',
			'account' => 'Account',
			'vouch_account' => 'Vouch Account',
			'content' => 'Content',
			'award_fund' => 'Award Fund',
			'award_account' => 'Award Account',
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
		$criteria->compare('borrow_id',$this->borrow_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('vouch_account',$this->vouch_account,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('award_fund',$this->award_fund,true);
		$criteria->compare('award_account',$this->award_account,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}