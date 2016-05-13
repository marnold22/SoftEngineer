<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sitedata".
 *
 * @property integer $DID
 * @property string $Location
 *
 * @property Contributions[] $contributions
 * @property User[] $us
 * @property Dataset[] $datasets
 * @property Projects[] $ps
 */
class SiteData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sitedata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Location'], 'required'],
            [['Location'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DID' => 'Did',
            'Location' => 'Location',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContributions()
    {
        return $this->hasMany(Contributions::className(), ['DID' => 'DID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUs()
    {
        return $this->hasMany(User::className(), ['id' => 'UID'])->viaTable('contributions', ['DID' => 'DID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatasets()
    {
        return $this->hasMany(Dataset::className(), ['DID' => 'DID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPs()
    {
        return $this->hasMany(Projects::className(), ['PID' => 'PID'])->viaTable('dataset', ['DID' => 'DID']);
    }
}
