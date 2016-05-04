<?php
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, docx'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            Yii::error("validated\n");
            $output = print_r($this->imageFile, true);
            Yii::error($output);
            $this->imageFile->saveAs(Yii::$app->basePath.'/web/uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
