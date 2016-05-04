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
    public $projectname;
    public $username;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, docx, jpeg', 'maxFiles' => 4],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFile as $file) {
                $file->saveAs(Yii::$app->basePath.'/web/uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } 
        else {
            return false;
        }
    }
}
