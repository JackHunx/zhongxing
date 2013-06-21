<?php

/**
 * This is the model class for table "zx_comment".
 *
 * The followings are the available columns in table 'zx_comment':
 * @property integer $id
 * @property integer $pid
 * @property integer $user_id
 * @property string $module_code
 * @property integer $article_id
 * @property string $comment
 * @property string $flag
 * @property string $order
 * @property integer $status
 * @property string $addtime
 * @property string $addip
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return 'zx_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, user_id, article_id, status', 'numerical', 'integerOnly'=>true),
			array('module_code', 'length', 'max'=>50),
			array('flag, addtime, addip', 'length', 'max'=>30),
			array('order', 'length', 'max'=>10),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pid, user_id, module_code, article_id, comment, flag, order, status, addtime, addip', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'module_code' => 'Module Code',
			'article_id' => 'Article',
			'comment' => 'Comment',
			'flag' => 'Flag',
			'order' => 'Order',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('module_code',$this->module_code,true);
		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('order',$this->order,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}