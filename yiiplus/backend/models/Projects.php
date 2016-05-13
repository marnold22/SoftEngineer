<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $PID
 * @property string $Name
 * @property string $Description
 *
 * @property Credentials[] $credentials
 * @property User[] $us
 * @property Dataset[] $datasets
 * @property Sitedata[] $ds
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description'], 'string'],
            [['Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PID' => 'Pid',
            'Name' => 'Name',
            'Description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCredentials()
    {
        return $this->hasMany(Credentials::className(), ['PID' => 'PID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUs()
    {
        return $this->hasMany(User::className(), ['id' => 'UID'])->viaTable('credentials', ['PID' => 'PID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatasets()
    {
        return $this->hasMany(Dataset::className(), ['PID' => 'PID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDs()
    {
        return $this->hasMany(Sitedata::className(), ['DID' => 'DID'])->viaTable('dataset', ['PID' => 'PID']);
    }
}
