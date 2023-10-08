<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property integer $id_transaksi
 * @property integer $id_pasien
 * @property integer $id_pegawai
 * @property string $keluhan
 * @property string $diagnosa
 * @property integer $id_tindakan
 * @property integer $qty
 * @property string $resep
 * @property integer $id_obat
 * @property integer $total
 * @property integer $bayar
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Pasien $idPasien
 * @property Pegawai $idPegawai
 * @property Tindakan $idTindakan
 * @property Obat $idObat
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keluhan, diagnosa, qty, resep, total, bayar, status', 'required'),
			array('id_pasien, id_pegawai, id_tindakan, qty, id_obat, total, bayar, status', 'numerical', 'integerOnly'=>true),
			array('keluhan, diagnosa, resep', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaksi, id_pasien, id_pegawai, keluhan, diagnosa, id_tindakan, qty, resep, id_obat, total, bayar, status', 'safe', 'on'=>'search'),
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
			'idPasien' => array(self::BELONGS_TO, 'Pasien', 'id_pasien'),
			'idPegawai' => array(self::BELONGS_TO, 'Pegawai', 'id_pegawai'),
			'idTindakan' => array(self::BELONGS_TO, 'Tindakan', 'id_tindakan'),
			'idObat' => array(self::BELONGS_TO, 'Obat', 'id_obat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaksi' => 'ID Transaksi',
			'id_pasien' => 'Nama Pasien',
			'id_pegawai' => 'Id Pegawai',
			'keluhan' => 'Keluhan',
			'diagnosa' => 'Diagnosa',
			'id_tindakan' => 'Tindakan',
			'qty' => 'Qty',
			'resep' => 'Resep',
			'id_obat' => 'Obat',
			'total' => 'Total',
			'bayar' => 'Bayar',
			'status' => 'Status',
		);
	}

	public function setNamaPasien($id_pasien)
	{
		$sql = "SELECT nama_pasien FROM pasien where id_pasien = $id_pasien";
		$query = Yii::app()->db->createCommand($sql)->queryRow();
		$result = $query['nama_pasien'];
		// var_dump($result); die();
		return $result;
	}

	public function setSatuan($id_obat)
	{
		if($id_obat != null){
		$sql = "SELECT satuan FROM obat where id_obat = $id_obat";
		$query = Yii::app()->db->createCommand($sql)->queryRow();
		$result = $query['satuan'];
		// var_dump($result); die();

		if($result == 0){
			$result = 'Tablet';
		}else if($result == 1){
			$result = 'Botol';
		}else {
			$result = 'Kaplet';
		}

		}else {
			$result = 0;
		}
		return $result;
	}

	public function setObat ($id_obat)
	{
		if($id_obat != null){
		$sql = "SELECT nama_obat FROM obat where id_obat = $id_obat";
		$query = Yii::app()->db->createCommand($sql)->queryRow();
		$result = $query['nama_obat'];
		// var_dump($result); die();
		}else {
			$result = 0;
		}
		return $result;
	}

	public function setStatus($status)
	{
		if($status == 0)
		{
			$status = 'Belum Diperiksa';
		}else if ($status == 1){
			$status = 'Belum Dibayar';
		}else {
			$status = 'Lunas';
		}

		return $status;
	}

	public function setTindakan($tindakan)
	{
		if($tindakan != null){
		$sql = "SELECT keterangan FROM tindakan where id_tindakan = $tindakan";
		$query = Yii::app()->db->createCommand($sql)->queryRow();
		$result = $query['keterangan'];
		}else {
			$result = 0;
		}
		// var_dump($result); die();
		return $result;
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

		$criteria->compare('id_transaksi',$this->id_transaksi);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('keluhan',$this->keluhan,true);
		$criteria->compare('diagnosa',$this->diagnosa,true);
		$criteria->compare('id_tindakan',$this->id_tindakan);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('resep',$this->resep,true);
		$criteria->compare('id_obat',$this->id_obat);
		$criteria->compare('total',$this->total);
		$criteria->compare('bayar',$this->bayar);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
