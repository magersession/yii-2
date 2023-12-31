<?php

/**
 * This is the model class for table "pegawai".
 *
 * The followings are the available columns in table 'pegawai':
 * @property integer $id_pegawai
 * @property string $nama
 * @property string $jabatan
 * @property string $alamat
 * @property string $no_telepon
 *
 * The followings are the available model relations:
 * @property Transaksi[] $transaksis
 * @property User[] $users
 */
class Pegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, nama, jabatan, alamat, no_telepon', 'required'),
			array('id_pegawai', 'numerical', 'integerOnly'=>true),
			array('nama, jabatan, alamat', 'length', 'max'=>50),
			array('no_telepon', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pegawai, nama, jabatan, alamat, no_telepon', 'safe', 'on'=>'search'),
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
			'transaksis' => array(self::HAS_MANY, 'Transaksi', 'id_pegawai'),
			'users' => array(self::HAS_MANY, 'User', 'id_pegawai'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pegawai' => 'Id Pegawai',
			'nama' => 'Nama',
			'jabatan' => 'Jabatan',
			'alamat' => 'Alamat',
			'no_telepon' => 'No Telepon',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_telepon',$this->no_telepon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
