<?php

/**
 * This is the model class for table "zx_bbs_credits".
 *
 * The followings are the available columns in table 'zx_bbs_credits':
 * @property string $id
 * @property string $creditscode
 * @property string $creditsname
 * @property integer $postvar
 * @property integer $replyvar
 * @property integer $goodvar
 * @property integer $uploadvar
 * @property integer $downvar
 * @property integer $votevar
 * @property integer $isuse
 */
class BbsCredits extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BbsCredits the static model class
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
		return 'zx_bbs_credits';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('postvar, replyvar, goodvar, uploadvar, downvar, votevar, isuse', 'numerical', 'integerOnly'=>true),
			array('creditscode, creditsname', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, creditscode, creditsname, postvar, replyvar, goodvar, uploadvar, downvar, votevar, isuse', 'safe', 'on'=>'search'),
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
			'creditscode' => 'Creditscode',
			'creditsname' => 'Creditsname',
			'postvar' => 'Postvar',
			'replyvar' => 'Replyvar',
			'goodvar' => 'Goodvar',
			'uploadvar' => 'Uploadvar',
			'downvar' => 'Downvar',
			'votevar' => 'Votevar',
			'isuse' => 'Isuse',
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
		$criteria->compare('creditscode',$this->creditscode,true);
		$criteria->compare('creditsname',$this->creditsname,true);
		$criteria->compare('postvar',$this->postvar);
		$criteria->compare('replyvar',$this->replyvar);
		$criteria->compare('goodvar',$this->goodvar);
		$criteria->compare('uploadvar',$this->uploadvar);
		$criteria->compare('downvar',$this->downvar);
		$criteria->compare('votevar',$this->votevar);
		$criteria->compare('isuse',$this->isuse);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}