<?php

class RepoImage extends ActiveRecord
{

	public function tableName()
	{
		return 'repo_image';
	}

	public function rules()
	{
		return array(
			array('path', 'required'),
			array('name', 'length', 'max'=>100),
			array('description', 'safe'),
		);
	}

	public function relations()
	{
		return array(
			'bannerimages' => array(self::HAS_MANY, 'BannerImages', 'repo_image_id'),
			'galleries' => array(self::HAS_MANY, 'Gallery', 'repo_image_id'),
			'inks' => array(self::HAS_MANY, 'Ink', 'repo_image_id'),
			'machines' => array(self::HAS_MANY, 'Machine', 'repo_image_id'),
			'spareparts' => array(self::HAS_MANY, 'SparePart', 'repo'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'path' => 'Path',
			'name' => 'Name',
			'description' => 'Description',
		);
	}

}
