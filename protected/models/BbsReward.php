<?php

/**
 * This is the model class for table "zx_bbs_reward".
 *
 * The followings are the available columns in table 'zx_bbs_reward':
 * @property string $id
 * @property string $tid
 * @property string $userid
 * @property string $bestid
 * @property string $reward
 * @property string $rewardcredits
 */
class BbsReward extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BbsReward the static model class
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
		return 'zx_bbs_reward';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tid, userid, bestid, reward', 'length', 'max'=>10),
			array('rewardcredits', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tid, userid, bestid, reward, rewardcredits', 'safe', 'on'=>'search'),
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
			'tid' => 'Tid',
			'userid' => 'Userid',
			'bestid' => 'Bestid',
			'reward' => 'Reward',
			'rewardcredits' => 'Rewardcredits',
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
		$criteria->compare('tid',$this->tid,true);
		$criteria->compare('userid',$this->userid,true);
		$criteria->compare('bestid',$this->bestid,true);
		$criteria->compare('reward',$this->reward,true);
		$criteria->compare('rewardcredits',$this->rewardcredits,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}