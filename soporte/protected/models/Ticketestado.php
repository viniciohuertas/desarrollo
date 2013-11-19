<?php

/**
 * This is the model class for table "ticketestado".
 *
 * The followings are the available columns in table 'ticketestado':
 * @property string $idticketestado
 * @property string $ticket_idticket
 * @property string $estado_idestado
 *
 * The followings are the available model relations:
 * @property Estado $estadoIdestado
 * @property Ticket $ticketIdticket
 */
class Ticketestado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ticketestado the static model class
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
		return 'ticketestado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ticket_idticket, estado_idestado', 'required'),
			array('ticket_idticket, estado_idestado', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idticketestado, ticket_idticket, estado_idestado', 'safe', 'on'=>'search'),
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
			'estadoIdestado' => array(self::BELONGS_TO, 'Estado', 'estado_idestado'),
			'ticketIdticket' => array(self::BELONGS_TO, 'Ticket', 'ticket_idticket'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idticketestado' => 'Idticketestado',
			'ticket_idticket' => 'Ticket Idticket',
			'estado_idestado' => 'Estado Idestado',
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

		$criteria->compare('idticketestado',$this->idticketestado,true);
		$criteria->compare('ticket_idticket',$this->ticket_idticket,true);
		$criteria->compare('estado_idestado',$this->estado_idestado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}