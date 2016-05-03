<?php

class Ink extends ActiveRecord
{

	public function tableName()
	{
		return 'ink';
	}

	public function rules()
	{
		return array(
			array('path_file, nama_file', 'required'),
			array('type', 'length', 'max'=>8),
			array('nama_file', 'length', 'max'=>200),
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
			'nama_file' => 'Nama File',
		);
	}

}
