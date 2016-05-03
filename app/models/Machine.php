<?php

class Machine extends ActiveRecord
{

	public function tableName()
	{
		return 'machine';
	}

	public function rules()
	{
		return array(
			array('path_file, name_file', 'required'),
			array('type', 'length', 'max'=>8),
			array('name_file', 'length', 'max'=>200),
		);
	}

	public function relations()
	{
		return array(
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'path_file' => 'Path File',
			'name_file' => 'Name File',
		);
	}

}
