<?php

/**
 * This is the model class for table "tripLog".
 *
 * The followings are the available columns in table 'tripLog':
 * @property integer $id
 * @property integer $driver
 * @property integer $vehicle
 * @property integer $location
 * @property string $tripday
 * @property integer $start_mileage
 * @property integer $end_mileage
 * @property string $user
 *
 * The followings are the available model relations:
 * @property Driver $driver0
 * @property User $user0
 * @property Vehicle $vehicle0
 */
class TripLog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tripLog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('driver, vehicle, location, tripday, start_mileage, end_mileage, user', 'required'),
			array('driver, vehicle, location, start_mileage, end_mileage', 'numerical', 'integerOnly'=>true),
			array('user', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, driver, vehicle, location, tripday, start_mileage, end_mileage, user', 'safe', 'on'=>'search'),
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
			'driver0' => array(self::BELONGS_TO, 'Driver', 'driver'),
			'user0' => array(self::BELONGS_TO, 'User', 'user'),
			'vehicle0' => array(self::BELONGS_TO, 'Vehicle', 'vehicle'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'driver' => 'Driver',
			'vehicle' => 'Vehicle',
			'location' => 'Location',
			'tripday' => 'Tripday',
			'start_mileage' => 'Start Mileage',
			'end_mileage' => 'End Mileage',
			'user' => 'User',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('driver',$this->driver);
		$criteria->compare('vehicle',$this->vehicle);
		$criteria->compare('location',$this->location);
		$criteria->compare('tripday',$this->tripday,true);
		$criteria->compare('start_mileage',$this->start_mileage);
		$criteria->compare('end_mileage',$this->end_mileage);
		$criteria->compare('user',$this->user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TripLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
