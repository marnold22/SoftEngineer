<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dataset".
 *
 * @property integer $DID
 * @property integer $PID
 *
 * @property Projects $p
 * @property Sitedata $d
 */
class Dataset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dataset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DID', 'PID'], 'required'],
            [['DID', 'PID'], 'integer'],
            [['PID'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['PID' => 'PID']],
            [['DID'], 'exist', 'skipOnError' => true, 'targetClass' => Sitedata::className(), 'targetAttribute' => ['DID' => 'DID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DID' => 'Did',
            'PID' => 'Pid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(Projects::className(), ['PID' => 'PID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getD()
    {
        return $this->hasOne(Sitedata::className(), ['DID' => 'DID']);
    }
}
