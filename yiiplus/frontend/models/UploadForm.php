<?php
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

class UploadForm extends Model
{
    public $file;



    public function rules()
    {
        return [
            [['file'], 'file'],
        ];

    }
}
?>
