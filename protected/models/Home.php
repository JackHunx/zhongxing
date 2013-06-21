<?php

/**
 * This is the model class for table "zx_home".
 *
 * The followings are the available columns in table 'zx_home':
 * @property string $id
 * @property integer $site_id
 * @property integer $user_id
 * @property string $name
 * @property integer $status
 * @property integer $order
 * @property integer $hits
 * @property string $litpic
 * @property string $flag
 * @property string $source
 * @property string $publish
 * @property string $xiaoqu
 * @property string $shi
 * @property string $ting
 * @property string $wei
 * @property string $louceng
 * @property string $zonglouceng
 * @property string $loupan
 * @property string $zhucegongsi
 * @property string $mianji
 * @property string $mianji1
 * @property string $mianji2
 * @property string $fangshi
 * @property string $leixing
 * @property string $zhuangxiu
 * @property string $chaoxiang
 * @property string $zujin
 * @property string $jiage
 * @property string $jiage1
 * @property string $jiage2
 * @property string $jiageleixing
 * @property string $lishijingying
 * @property string $jibenqingkuang
 * @property string $diduan
 * @property string $diduan1
 * @property string $diduan2
 * @property string $fukuan
 * @property string $linjin
 * @property string $peizhi
 * @property string $tupian
 * @property string $xianxingbie
 * @property string $chuzufangjian
 * @property string $chuzuleixing
 * @property string $content
 * @property string $lianxiren
 * @property string $dianhua
 * @property string $qq
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $addtime
 * @property string $addip
 * @property string $updatetime
 * @property string $updateip
 */
class Home extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Home the static model class
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
		return 'zx_home';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, user_id, status, order, hits', 'numerical', 'integerOnly'=>true),
			array('name, litpic, content', 'length', 'max'=>255),
			array('flag, source, publish, xiaoqu, peizhi, lianxiren, dianhua, qq, addtime, addip, updatetime, updateip', 'length', 'max'=>50),
			array('shi, ting, wei, louceng, zonglouceng, loupan, zhucegongsi, mianji, mianji1, mianji2, fangshi, leixing, zhuangxiu, chaoxiang, zujin, jiage, jiage1, jiage2, jiageleixing, lishijingying, jibenqingkuang, diduan, diduan1, diduan2, fukuan, linjin', 'length', 'max'=>10),
			array('tupian, xianxingbie, chuzufangjian, chuzuleixing', 'length', 'max'=>250),
			array('province, city, area', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, user_id, name, status, order, hits, litpic, flag, source, publish, xiaoqu, shi, ting, wei, louceng, zonglouceng, loupan, zhucegongsi, mianji, mianji1, mianji2, fangshi, leixing, zhuangxiu, chaoxiang, zujin, jiage, jiage1, jiage2, jiageleixing, lishijingying, jibenqingkuang, diduan, diduan1, diduan2, fukuan, linjin, peizhi, tupian, xianxingbie, chuzufangjian, chuzuleixing, content, lianxiren, dianhua, qq, province, city, area, addtime, addip, updatetime, updateip', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'name' => 'Name',
			'status' => 'Status',
			'order' => 'Order',
			'hits' => 'Hits',
			'litpic' => 'Litpic',
			'flag' => 'Flag',
			'source' => 'Source',
			'publish' => 'Publish',
			'xiaoqu' => 'Xiaoqu',
			'shi' => 'Shi',
			'ting' => 'Ting',
			'wei' => 'Wei',
			'louceng' => 'Louceng',
			'zonglouceng' => 'Zonglouceng',
			'loupan' => 'Loupan',
			'zhucegongsi' => 'Zhucegongsi',
			'mianji' => 'Mianji',
			'mianji1' => 'Mianji1',
			'mianji2' => 'Mianji2',
			'fangshi' => 'Fangshi',
			'leixing' => 'Leixing',
			'zhuangxiu' => 'Zhuangxiu',
			'chaoxiang' => 'Chaoxiang',
			'zujin' => 'Zujin',
			'jiage' => 'Jiage',
			'jiage1' => 'Jiage1',
			'jiage2' => 'Jiage2',
			'jiageleixing' => 'Jiageleixing',
			'lishijingying' => 'Lishijingying',
			'jibenqingkuang' => 'Jibenqingkuang',
			'diduan' => 'Diduan',
			'diduan1' => 'Diduan1',
			'diduan2' => 'Diduan2',
			'fukuan' => 'Fukuan',
			'linjin' => 'Linjin',
			'peizhi' => 'Peizhi',
			'tupian' => 'Tupian',
			'xianxingbie' => 'Xianxingbie',
			'chuzufangjian' => 'Chuzufangjian',
			'chuzuleixing' => 'Chuzuleixing',
			'content' => 'Content',
			'lianxiren' => 'Lianxiren',
			'dianhua' => 'Dianhua',
			'qq' => 'Qq',
			'province' => 'Province',
			'city' => 'City',
			'area' => 'Area',
			'addtime' => 'Addtime',
			'addip' => 'Addip',
			'updatetime' => 'Updatetime',
			'updateip' => 'Updateip',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('order',$this->order);
		$criteria->compare('hits',$this->hits);
		$criteria->compare('litpic',$this->litpic,true);
		$criteria->compare('flag',$this->flag,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('publish',$this->publish,true);
		$criteria->compare('xiaoqu',$this->xiaoqu,true);
		$criteria->compare('shi',$this->shi,true);
		$criteria->compare('ting',$this->ting,true);
		$criteria->compare('wei',$this->wei,true);
		$criteria->compare('louceng',$this->louceng,true);
		$criteria->compare('zonglouceng',$this->zonglouceng,true);
		$criteria->compare('loupan',$this->loupan,true);
		$criteria->compare('zhucegongsi',$this->zhucegongsi,true);
		$criteria->compare('mianji',$this->mianji,true);
		$criteria->compare('mianji1',$this->mianji1,true);
		$criteria->compare('mianji2',$this->mianji2,true);
		$criteria->compare('fangshi',$this->fangshi,true);
		$criteria->compare('leixing',$this->leixing,true);
		$criteria->compare('zhuangxiu',$this->zhuangxiu,true);
		$criteria->compare('chaoxiang',$this->chaoxiang,true);
		$criteria->compare('zujin',$this->zujin,true);
		$criteria->compare('jiage',$this->jiage,true);
		$criteria->compare('jiage1',$this->jiage1,true);
		$criteria->compare('jiage2',$this->jiage2,true);
		$criteria->compare('jiageleixing',$this->jiageleixing,true);
		$criteria->compare('lishijingying',$this->lishijingying,true);
		$criteria->compare('jibenqingkuang',$this->jibenqingkuang,true);
		$criteria->compare('diduan',$this->diduan,true);
		$criteria->compare('diduan1',$this->diduan1,true);
		$criteria->compare('diduan2',$this->diduan2,true);
		$criteria->compare('fukuan',$this->fukuan,true);
		$criteria->compare('linjin',$this->linjin,true);
		$criteria->compare('peizhi',$this->peizhi,true);
		$criteria->compare('tupian',$this->tupian,true);
		$criteria->compare('xianxingbie',$this->xianxingbie,true);
		$criteria->compare('chuzufangjian',$this->chuzufangjian,true);
		$criteria->compare('chuzuleixing',$this->chuzuleixing,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('lianxiren',$this->lianxiren,true);
		$criteria->compare('dianhua',$this->dianhua,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('addtime',$this->addtime,true);
		$criteria->compare('addip',$this->addip,true);
		$criteria->compare('updatetime',$this->updatetime,true);
		$criteria->compare('updateip',$this->updateip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}