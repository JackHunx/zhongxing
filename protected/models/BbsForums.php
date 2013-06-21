<?php

/**
 * This is the model class for table "zx_bbs_forums".
 *
 * The followings are the available columns in table 'zx_bbs_forums':
 * @property string $id
 * @property string $pid
 * @property string $name
 * @property string $content
 * @property string $rules
 * @property string $picurl
 * @property string $admins
 * @property string $today_num
 * @property string $topics_num
 * @property string $posts_num
 * @property string $last_postname
 * @property string $last_postuser
 * @property string $last_postusername
 * @property string $last_posttime
 * @property string $last_postid
 * @property integer $isverify
 * @property string $forumpass
 * @property string $forumusers
 * @property string $forumgroups
 * @property integer $showtype
 * @property integer $ishidden
 * @property string $order
 * @property string $keywords
 */
class BbsForums extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BbsForums the static model class
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
		return 'zx_bbs_forums';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isverify, showtype, ishidden', 'numerical', 'integerOnly'=>true),
			array('pid, today_num, topics_num, posts_num, last_posttime, last_postid, order', 'length', 'max'=>10),
			array('name, last_postname, last_postuser, forumpass', 'length', 'max'=>45),
			array('content', 'length', 'max'=>200),
			array('picurl', 'length', 'max'=>100),
			array('admins, keywords', 'length', 'max'=>255),
			array('last_postusername', 'length', 'max'=>30),
			array('rules, forumusers, forumgroups', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pid, name, content, rules, picurl, admins, today_num, topics_num, posts_num, last_postname, last_postuser, last_postusername, last_posttime, last_postid, isverify, forumpass, forumusers, forumgroups, showtype, ishidden, order, keywords', 'safe', 'on'=>'search'),
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
			'pid' => 'Pid',
			'name' => 'Name',
			'content' => 'Content',
			'rules' => 'Rules',
			'picurl' => 'Picurl',
			'admins' => 'Admins',
			'today_num' => 'Today Num',
			'topics_num' => 'Topics Num',
			'posts_num' => 'Posts Num',
			'last_postname' => 'Last Postname',
			'last_postuser' => 'Last Postuser',
			'last_postusername' => 'Last Postusername',
			'last_posttime' => 'Last Posttime',
			'last_postid' => 'Last Postid',
			'isverify' => 'Isverify',
			'forumpass' => 'Forumpass',
			'forumusers' => 'Forumusers',
			'forumgroups' => 'Forumgroups',
			'showtype' => 'Showtype',
			'ishidden' => 'Ishidden',
			'order' => 'Order',
			'keywords' => 'Keywords',
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
		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('rules',$this->rules,true);
		$criteria->compare('picurl',$this->picurl,true);
		$criteria->compare('admins',$this->admins,true);
		$criteria->compare('today_num',$this->today_num,true);
		$criteria->compare('topics_num',$this->topics_num,true);
		$criteria->compare('posts_num',$this->posts_num,true);
		$criteria->compare('last_postname',$this->last_postname,true);
		$criteria->compare('last_postuser',$this->last_postuser,true);
		$criteria->compare('last_postusername',$this->last_postusername,true);
		$criteria->compare('last_posttime',$this->last_posttime,true);
		$criteria->compare('last_postid',$this->last_postid,true);
		$criteria->compare('isverify',$this->isverify);
		$criteria->compare('forumpass',$this->forumpass,true);
		$criteria->compare('forumusers',$this->forumusers,true);
		$criteria->compare('forumgroups',$this->forumgroups,true);
		$criteria->compare('showtype',$this->showtype);
		$criteria->compare('ishidden',$this->ishidden);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('keywords',$this->keywords,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}