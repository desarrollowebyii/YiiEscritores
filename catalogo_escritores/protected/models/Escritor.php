<?php

/**
 * This is the model class for table "escritor".
 *
 * The followings are the available columns in table 'escritor':
 * @property integer $id_escritor
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property integer $edad
 *
 * The followings are the available model relations:
 * @property Libro[] $libros
 */
class Escritor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	private $fullName;
	public function tableName()
	{
		return 'escritor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido_paterno, apellido_materno, edad', 'required'),
			array('edad', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido_paterno, apellido_materno', 'length', 'max'=>45),
			array('nombre, apellido_paterno, apellido_materno, edad','filter', 'filter'=>'strtoupper'), 
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_escritor, nombre, apellido_paterno, apellido_materno, edad', 'safe', 'on'=>'search'),
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
			'libros' => array(self::HAS_MANY, 'Libro', 'id_escritor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_escritor' => 'Id Escritor',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'edad' => 'Edad',
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

		$criteria->compare('id_escritor',$this->id_escritor);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('edad',$this->edad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



public function getFullName()
{
    return $this->nombre.' '.$this->apellido_paterno.' '.$this->apellido_materno;
}

		/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Escritor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
