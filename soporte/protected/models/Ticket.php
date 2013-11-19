<?php

/**
 * This is the model class for table "ticket".
 *
 * The followings are the available columns in table 'ticket':
 * @property string $idticket
 * @property string $asunto
 * @property string $texto
 * @property string $iduser
 * @property string $producto_idproducto
 * @property string $prioridad_idprioridad
 *
 * The followings are the available model relations:
 * @property Adjunto[] $adjuntos
 * @property Comentarios[] $comentarioses
 * @property Prioridad $prioridadIdprioridad
 * @property Producto $productoIdproducto
 * @property Ticketestado[] $ticketestados
 */
class Ticket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ticket the static model class
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
		return 'ticket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('asunto, producto_idproducto, prioridad_idprioridad', 'required'),
			array('asunto', 'length', 'max'=>255),
			array('iduser, producto_idproducto, prioridad_idprioridad', 'length', 'max'=>10),
			array('texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idticket, asunto, texto, iduser, producto_idproducto, prioridad_idprioridad', 'safe', 'on'=>'search'),
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
			'adjuntos' => array(self::HAS_MANY, 'Adjunto', 'ticket_idticket'),
			'comentarioses' => array(self::HAS_MANY, 'Comentarios', 'ticket_idticket'),
			'prioridadIdprioridad' => array(self::BELONGS_TO, 'Prioridad', 'prioridad_idprioridad'),
			'productoIdproducto' => array(self::BELONGS_TO, 'Producto', 'producto_idproducto'),
			'ticketestados' => array(self::HAS_MANY, 'Ticketestado', 'ticket_idticket'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idticket' => 'Idticket',
			'asunto' => 'Asunto',
			'texto' => 'Texto',
			'iduser' => 'Iduser',
			'producto_idproducto' => 'Producto Idproducto',
			'prioridad_idprioridad' => 'Prioridad Idprioridad',
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

		$criteria->compare('idticket',$this->idticket,true);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('iduser',$this->iduser,true);
		$criteria->compare('producto_idproducto',$this->producto_idproducto,true);
		$criteria->compare('prioridad_idprioridad',$this->prioridad_idprioridad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}