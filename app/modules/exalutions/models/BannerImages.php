<?php

class BannerImages extends ActiveRecord
{

	public function tableName()
	{
		return 'banner_images';
	}

	public function rules()
	{
		return array(
			array('banner_id, repo_image_id', 'required'),
			array('banner_id, repo_image_id', 'numerical', 'integerOnly'=>true),
		);
	}

	public function relations()
	{
		return array(
			'banner' => array(self::BELONGS_TO, 'Banner', 'banner_id'),
			'repoimage' => array(self::BELONGS_TO, 'RepoImage', 'repo_image_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'banner_id' => 'Banner',
			'repo_image_id' => 'Repo Image',
		);
	}

}
