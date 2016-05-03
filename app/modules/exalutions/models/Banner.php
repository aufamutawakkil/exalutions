<?php

class Banner extends ActiveRecord
{

	public function tableName()
	{
		return 'banner';
	}

	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>100),
			array('status', 'length', 'max'=>3),
		);
	}

	public function relations()
	{
		return array(
			'bannerimages' => array(self::HAS_MANY, 'BannerImages', 'banner_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'status' => 'Status',
		);
	}

}
