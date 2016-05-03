<?php

class Download extends ActiveRecord
{

	public function tableName()
	{
		return 'download';
	}

	public function rules()
	{
		return array(
			array('nama_file, path_file', 'required'),
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
			'nama_file' => 'Nama File',
			'path_file' => 'Path File',
		);
	}

}
