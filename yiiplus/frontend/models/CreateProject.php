<?php

namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;


class CreateProject extends Model
{
	public $creatorName;
	public $creatorAssociation;
	public $projectName;
	public $projectDescription;
	public $displayImage;
	public $displayDoc;
	public $requestEmail;
	public $requestEmailRepeat;

	public function rules()
	{
		return [
            [['displayImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 4],
            [['displayDoc'], 'file', 'skipOnEmpty' => true, 'extensions' => 'docx, xlsx, txt, rtf, csv', 'maxFiles' => 4],
            [['requestEmail'], 'email', 'allowEmpty' => false],
            [['creatorName'], 'type', ]
        ];

	}
}


