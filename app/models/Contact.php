<?php

class Contact extends ActiveRecord
{

	public function tableName()
	{
		return 'contact';
	}

	public function rules()
	{
		return array(
			array('email, facebook, twitter', 'length', 'max'=>100),
			array('map_lat, map_lng', 'length', 'max'=>50),
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
			'email' => 'Email',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
			'map_lat' => 'Map Lat',
			'map_lng' => 'Map Lng',
		);
	}

}
