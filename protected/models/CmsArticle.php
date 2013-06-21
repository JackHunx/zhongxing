<?php

/**
 * This is the model class for table "zx_cms_article".
 *
 * The followings are the available columns in table 'zx_cms_article':
 * @property string $id
 * @property integer $site_id
 * @property string $title
 * @property string $littitle
 * @property integer $status
 * @property string $litpic
 * @property string $flag
 * @property string $source
 * @property integer $is_jump
 * @property string $author
 * @property string $jumpurl
 * @property string $summary
 * @property string $content
 * @property integer $order
 * @property integer $hits
 * @property integer $comment
 * @property integer $is_comment
 * @property integer $user_id
 * @property string $addtime
 * @property string $addip
 */
class CmsArticle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CmsArticle the static model class
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
		return 'zx_cms_article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, status, is_jump, order, hits, comment, is_comment, user_id', 'numerical', 'integerOnly'=>true),
			array('title, litpic, flag, author, jumpurl, summary', 'length', 'max'=>255),
			array('littitle', 'length', 'max'=>250),
			array('source, addtime, addip', 'length', 'max'=>50),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, title, littitle, status, litpic, flag, source, is_jump, author, jumpurl, summary, content, order, hits, comment, is_comment, user_id, addtime, addip', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'littitle' => 'Littitle',
			'status' => 'Status',
			'litpic' => 'Litpic',
			'flag' => 'Flag',
			'source' => 'Source',
			'is_jump' => 'Is Jump',
			'author' => 'Author',
			'jumpurl' => 'Jumpurl',
			'summary' => 'Summary',
			'content' => 'Content',
			'order' => 'Order',
			'hits' => 'Hits',
			'comment' => 'Comment',
			'is_comment' => 'Is Comment',
			'user_id' => 'User',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('littitle',$this->littitle,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('is_jump',$this->is_jump);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('jumpurl',$this->jumpurl,true);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('comment',$this->comment);
		$criteria->compare('is_comment',$this->is_comment);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}