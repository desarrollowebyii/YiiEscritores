<?php

/**
 * This is the model class for table "libro".
 *
 * The followings are the available columns in table 'libro':
 * @property integer $id_libro
 * @property integer $id_escritor
 * @property integer $id_genero
 * @property integer $noPaginas
 * @property string $titulo
 *
 * The followings are the available model relations:
 * @property Escritor $idEscritor
 * @property Genero $idGenero
 */
class Libro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'libro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_escritor, id_genero, noPaginas, titulo', 'required'),
			array('id_escritor, id_genero, noPaginas', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			array('titulo','filter', 'filter'=>'strtoupper'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_libro, id_escritor, id_genero, noPaginas, titulo', 'safe', 'on'=>'search'),
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
			'idEscritor' => array(self::BELONGS_TO, 'Escritor', 'id_escritor'),
			'idGenero' => array(self::BELONGS_TO, 'Genero', 'id_genero'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_libro' => 'ID Libro',
			'id_escritor' => 'Escritor',
			'id_genero' => 'Género',
			'noPaginas' => 'No. Páginas',
			'titulo' => 'Titulo',
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

		$criteria->compare('id_libro',$this->id_libro);
		$criteria->compare('id_escritor',$this->id_escritor);
		$criteria->compare('id_genero',$this->id_genero);
		$criteria->compare('noPaginas',$this->noPaginas);
		$criteria->compare('titulo',$this->titulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Libro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
