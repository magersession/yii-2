<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property integer $id_pegawai
 * @property integer $level
 * @property string $username
 * @property string $password
 * @property string $enkrip
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Pegawai $idPegawai
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, level, username, password, email', 'required'),
			array('level', 'numerical', 'integerOnly'=>true),
			array('id_pegawai', 'numerical', 'integerOnly'=>true),
			array('username, email', 'length', 'max' => 30),
			array('username', 'filter', 'filter' => 'strtolower'),
			array('username', 'unique'),
			array('username, password, enkrip, email', 'length', 'max' => 50, 'min' => 5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, level, username, password, enkrip, email', 'safe', 'on'=>'search'),
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
			'idPegawai' => array(self::BELONGS_TO, 'Pegawai', 'id_pegawai'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'ID User',
			'id_pegawai' => 'Nama Pegawai',
			'level' => 'Level',
			'username' => 'Username',
			'password' => 'Password',
			'enkrip' => 'Enkrip',
			'email' => 'Email',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('level',$this->level);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('enkrip',$this->enkrip,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getLevel()
	{
		return $this->level;
	}

	public function validatePassword($password)
	{
		return $this->hashPassword($password, $this->enkrip) === $this->password;
	}

	public function hashPassword($password, $salt)
	{
		return md5($salt . $password);
	}

	public function beforeSave()
	{
		$isinya = $this->generateSalt();
		$dua = $this->password;
		$this->enkrip = $isinya;
		$this->password = $this->hashPassword($dua, $isinya);
		return true;
	}

	protected function generateSalt()
	{
		return uniqid('', true);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
