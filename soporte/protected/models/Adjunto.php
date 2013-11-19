<?php

/**
 * This is the model class for table "adjunto".
 *
 * The followings are the available columns in table 'adjunto':
 * @property string $idadjunto
 * @property string $adjunto
 * @property string $descripcion
 * @property string $path
 * @property string $ticket_idticket
 *
 * The followings are the available model relations:
 * @property Ticket $ticketIdticket
 */
class Adjunto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Adjunto the static model class
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
		return 'adjunto';
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
			array('adjunto', 'length', 'max'=>255),
			array('ticket_idticket', 'length', 'max'=>10),
			array('descripcion, path', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idadjunto, adjunto, descripcion, path, ticket_idticket', 'safe', 'on'=>'search'),
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
			'idadjunto' => 'Idadjunto',
			'adjunto' => 'Adjunto',
			'descripcion' => 'Descripcion',
			'path' => 'Path',
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

		$criteria->compare('idadjunto',$this->idadjunto,true);
		$criteria->compare('adjunto',$this->adjunto,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('ticket_idticket',$this->ticket_idticket,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}