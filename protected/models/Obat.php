<?php

/**
 * This is the model class for table "obat".
 *
 * The followings are the available columns in table 'obat':
 * @property integer $id_obat
 * @property string $nama_obat
 * @property string $satuan
 * @property integer $harga
 * @property integer $jumlah
 * @property string $exp_date
 *
 * The followings are the available model relations:
 * @property Transaksi[] $transaksis
 */
class Obat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'obat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_obat, satuan, harga, jumlah, exp_date', 'required'),
			array('harga, jumlah', 'numerical', 'integerOnly' => true),
			array('nama_obat, satuan', 'length', 'max' => 255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_obat, nama_obat, satuan, harga, jumlah, exp_date', 'safe', 'on' => 'search'),
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
			'transaksis' => array(self::HAS_MANY, 'Transaksi', 'id_obat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_obat' => 'ID Obat',
			'nama_obat' => 'Nama Obat',
			'satuan' => 'Satuan',
			'harga' => 'Harga',
			'jumlah' => 'Jumlah',
			'exp_date' => 'Exp Date',
		);
	}

	public function getSatuan()
	{
		if ($this->satuan == 0) {
			$satuan = 'Tablet';
		} else if ($this->satuan == 1) {
			$satuan = 'Botol';
		} else {
			$satuan = 'Kaplet';
		}

		return $satuan;
	}

	public function getSatuanGrid($satuan)
	{
		if ($this->satuan == 0) {
			$satuan = 'Tablet';
		} else if ($this->satuan == 1) {
			$satuan = 'Botol';
		} else {
			$satuan = 'Kaplet';
		}

		return $satuan;
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

		$criteria = new CDbCriteria;

		$criteria->compare('id_obat', $this->id_obat);
		$criteria->compare('nama_obat', $this->nama_obat, true);
		$criteria->compare('satuan', $this->satuan, true);
		$criteria->compare('harga', $this->harga);
		$criteria->compare('jumlah', $this->jumlah);
		$criteria->compare('exp_date', $this->exp_date, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obat the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}
