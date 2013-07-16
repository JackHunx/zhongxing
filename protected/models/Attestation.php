<?php

/**
 * This is the model class for table "zx_attestation".
 *
 * The followings are the available columns in table 'zx_attestation':
 * @property string $id
 * @property integer $user_id
 * @property integer $type_id
 * @property string $name
 * @property integer $status
 * @property string $litpic
 * @property string $content
 * @property integer $jifen
 * @property string $pic
 * @property string $pic2
 * @property string $pic3
 * @property string $verify_time
 * @property integer $verify_user
 * @property string $verify_remark
 * @property string $addtime
 * @property string $addip
 */
class Attestation extends CActiveRecord
{
    public $user_search;
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Attestation the static model class
     */
    public static function model($className = __class__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'zx_attestation';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array(
                'user_id, type_id, status, jifen, verify_user',
                'numerical',
                'integerOnly' => true),
            array(
                'name, litpic, content',
                'length',
                'max' => 255),
            array(
                'pic2, pic3',
                'length',
                'max' => 100),
            array(
                'verify_time',
                'length',
                'max' => 32),
            array(
                'verify_remark',
                'length',
                'max' => 250),
            array(
                'addtime, addip',
                'length',
                'max' => 50),
            array('pic', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array(
                'id, user_id, type_id, name, status, litpic, content, jifen, pic, pic2, pic3, verify_time, verify_user, verify_remark, addtime, addip,user_search',
                'safe',
                'on' => 'search'),
            );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array('user' => array(
                self::BELONGS_TO,
                'User',
                'user_id'), );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'user_search',
            'id' => 'ID',
            'user_id' => 'User',
            'type_id' => 'Type',
            'name' => 'Name',
            'status' => 'Status',
            'litpic' => 'Litpic',
            'content' => 'Content',
            'jifen' => 'Jifen',
            'pic' => 'Pic',
            'pic2' => 'Pic2',
            'pic3' => 'Pic3',
            'verify_time' => 'Verify Time',
            'verify_user' => 'Verify User',
            'verify_remark' => 'Verify Remark',
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

        $criteria = new CDbCriteria;
        $criteria->with = array('user');
        $criteria->alias = "prefix";
        $criteria->compare('user.username', $this->user_search, true);
        //  $criteria->compare('user.realname', $this->user_search, true);
        $criteria->compare('id', $this->id, true);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('type_id', $this->type_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('litpic', $this->litpic, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('jifen', $this->jifen);
        $criteria->compare('pic', $this->pic, true);
        $criteria->compare('pic2', $this->pic2, true);
        $criteria->compare('pic3', $this->pic3, true);
        $criteria->compare('verify_time', $this->verify_time, true);
        $criteria->compare('verify_user', $this->verify_user);
        $criteria->compare('verify_remark', $this->verify_remark, true);
        $criteria->compare('addtime', $this->addtime, true);
        $criteria->compare('addip', $this->addip, true);

        return new CActiveDataProvider($this, array(
            'pagination' => array('pageSize' => 15, ),
            'sort' => array(
                'defaultOrder' => 'prefix.status ASC',
                'attributes' => array('user_search' => array(
                        'asc' => 'user.username',
                        'desc' => 'user.username DESC',
                        ), '*'),
                ),
            'criteria' => $criteria,

            ));
    }
}
