<?php

/**
 * This is the model class for table "tasks".
 *
 * The followings are the available columns in table 'tasks':
 * @property string $task_id
 * @property string $user_login
 * @property string $task_name
 * @property string $task_description
 */
class Tasks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tasks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_login, task_name', 'required'),
			array('user_login, task_name', 'length', 'max'=>60),
			array('task_description', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('task_id, user_login, task_name, task_description', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{

		return array(
			'task_id' => 'Task',
			'user_login' => 'User Login',
			'task_name' => 'Task Name',
			'task_description' => 'Task Description',


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

		$criteria->compare('task_id',$this->task_id,true);
		$criteria->compare('user_login',Yii::app()->user->getId(),true);
		$criteria->compare('task_name',$this->task_name,true);
		$criteria->compare('task_description',$this->task_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tasks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
