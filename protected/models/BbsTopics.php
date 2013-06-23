<?php

/**
 * This is the model class for table "zx_bbs_topics".
 *
 * The followings are the available columns in table 'zx_bbs_topics':
 * @property string $id
 * @property string $fid
 * @property string $user_id
 * @property integer $status
 * @property string $username
 * @property string $name
 * @property string $content
 * @property string $posttime
 * @property string $edittime
 * @property string $ordertime
 * @property string $last_replytime
 * @property integer $last_replyuser
 * @property string $last_replyusername
 * @property integer $type
 * @property string $posts_num
 * @property string $hits
 * @property integer $islock
 * @property integer $isgood
 * @property integer $istop
 * @property integer $isalltop
 * @property integer $stamp
 * @property integer $isrecycle
 * @property integer $credit
 * @property integer $verifystate
 * @property string $verifydesc
 * @property integer $isresolved
 * @property string $attachicon
 * @property string $highlight
 * @property string $addtime
 * @property string $addip
 */
class BbsTopics extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BbsTopics the static model class
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
		return 'zx_bbs_topics';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, last_replyuser, type, islock, isgood, istop, isalltop, stamp, isrecycle, credit, verifystate, isresolved', 'numerical', 'integerOnly'=>true),
			array('fid, user_id, posttime, edittime, ordertime, posts_num, hits', 'length', 'max'=>10),
			array('username, name, attachicon', 'length', 'max'=>45),
			array('last_replytime, last_replyusername', 'length', 'max'=>30),
			array('verifydesc', 'length', 'max'=>255),
			array('highlight', 'length', 'max'=>20),
			array('addtime, addip', 'length', 'max'=>50),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fid, user_id, status, username, name, content, posttime, edittime, ordertime, last_replytime, last_replyuser, last_replyusername, type, posts_num, hits, islock, isgood, istop, isalltop, stamp, isrecycle, credit, verifystate, verifydesc, isresolved, attachicon, highlight, addtime, addip', 'safe', 'on'=>'search'),
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
			'fid' => 'Fid',
			'user_id' => 'User',
			'status' => 'Status',
			'username' => 'Username',
			'name' => 'Name',
			'content' => 'Content',
			'posttime' => 'Posttime',
			'edittime' => 'Edittime',
			'ordertime' => 'Ordertime',
			'last_replytime' => 'Last Replytime',
			'last_replyuser' => 'Last Replyuser',
			'last_replyusername' => 'Last Replyusername',
			'type' => 'Type',
			'posts_num' => 'Posts Num',
			'hits' => 'Hits',
			'islock' => 'Islock',
			'isgood' => 'Isgood',
			'istop' => 'Istop',
			'isalltop' => 'Isalltop',
			'stamp' => 'Stamp',
			'isrecycle' => 'Isrecycle',
			'credit' => 'Credit',
			'verifystate' => 'Verifystate',
			'verifydesc' => 'Verifydesc',
			'isresolved' => 'Isresolved',
			'attachicon' => 'Attachicon',
			'highlight' => 'Highlight',
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
		$criteria->compare('fid',$this->fid,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('posttime',$this->posttime,true);
		$criteria->compare('edittime',$this->edittime,true);
		$criteria->compare('ordertime',$this->ordertime,true);
		$criteria->compare('last_replytime',$this->last_replytime,true);
		$criteria->compare('last_replyuser',$this->last_replyuser);
		$criteria->compare('last_replyusername',$this->last_replyusername,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('posts_num',$this->posts_num,true);
		$criteria->compare('hits',$this->hits,true);
		$criteria->compare('islock',$this->islock);
		$criteria->compare('isgood',$this->isgood);
		$criteria->compare('istop',$this->istop);
		$criteria->compare('isalltop',$this->isalltop);
		$criteria->compare('stamp',$this->stamp);
		$criteria->compare('isrecycle',$this->isrecycle);
		$criteria->compare('credit',$this->credit);
		$criteria->compare('verifystate',$this->verifystate);
		$criteria->compare('verifydesc',$this->verifydesc,true);
		$criteria->compare('isresolved',$this->isresolved);
		$criteria->compare('attachicon',$this->attachicon,true);
		$criteria->compare('highlight',$this->highlight,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}