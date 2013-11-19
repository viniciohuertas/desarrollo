<?php

/**
 * This is the model class for table "comentarios".
 *
 * The followings are the available columns in table 'comentarios':
 * @property string $idcomentarios
 * @property string $comentarios
 * @property string $ticket_idticket
 *
 * The followings are the available model relations:
 * @property Ticket $ticketIdticket
 */
class Comentarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comentarios the static model class
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
		return 'comentarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ticket_idticket', 'required'),
			array('ticket_idticket', 'length', 'max'=>10),
			array('comentarios', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcomentarios, comentarios, ticket_idticket', 'safe', 'on'=>'search'),
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
			'ticketIdticket' => array(self::BELONGS_TO, 'Ticket', 'ticket_idticket'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcomentarios' => 'Idcomentarios',
			'comentarios' => 'Comentarios',
			'ticket_idticket' => 'Ticket Idticket',
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

		$criteria->compare('idcomentarios',$this->idcomentarios,true);
		$criteria->compare('comentarios',$this->comentarios,true);
		$criteria->compare('ticket_idticket',$this->ticket_idticket,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}