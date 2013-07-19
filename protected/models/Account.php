<?php

/**
 * This is the model class for table "zx_account".
 *
 * The followings are the available columns in table 'zx_account':
 * @property string $id
 * @property integer $user_id
 * @property string $total
 * @property string $use_money
 * @property string $no_use_money
 * @property string $collection
 */
class Account extends CActiveRecord
{
    public $username;
    public $realname;
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Account the static model class
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
        return 'zx_account';
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
                'verifyCode',
                'captcha',
                'on' => 'bank',
                'allowEmpty' => !CCaptcha::checkRequirements()),
            array(
                'user_id',
                'numerical',
                'integerOnly' => true),
            array(
                'total, use_money, no_use_money, collection',
                'length',
                'max' => 11),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array(
                'id, user_id, total, use_money, no_use_money, collection,username,realname',
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
                self::HAS_ONE,
                'User',
                'user_id',
                ), );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'username',
            'realname',
            'id' => 'ID',
            'user_id' => 'User',
            'total' => 'Total',
            'use_money' => 'Use Money',
            'no_use_money' => 'No Use Money',
            'collection' => 'Collection',
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
        $criteria->alias = 'prefix';
        $criteria->compare('user.username', $this->username, true);
        $criteria->compare('user.realname', $this->realname, true);
        $criteria->compare('id', $this->id, true);
        $criteria->compare('prefix.user_id', $this->user_id);
        $criteria->compare('total', $this->total, true);
        $criteria->compare('use_money', $this->use_money, true);
        $criteria->compare('no_use_money', $this->no_use_money, true);
        $criteria->compare('collection', $this->collection, true);

        return new CActiveDataProvider($this, array(
            'pagination' => array('pageSize' => 15, ),
            'sort' => array(
                'defaultOrder' => 'id ASC',
                'attributes' => array(
                    'username' => array(
                        'asc' => 'user.username',
                        'desc' => 'user.username DESC',
                        ),
                    'reanlname' => array(
                        'asc' => 'user.realname',
                        'desc' => 'user.realname DESC',
                        ),
                    '*'),
                ),
            'criteria' => $criteria,
            ));
    }
}
