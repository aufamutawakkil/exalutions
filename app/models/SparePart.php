<?php

class SparePart extends ActiveRecord
{

	public function tableName()
	{
		return 'spare_part';
	}

	public function rules()
	{
		return array(
			array('name_file, path_file', 'required'),
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
			'name_file' => 'Name File',
			'path_file' => 'Path File',
		);
	}

}
