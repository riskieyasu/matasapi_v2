<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telinga".
 *
 * @property int $id
 * @property string $kondisi
 * @property string $foto
 * @property string $sapi_id
 */
class Telinga extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telinga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kondisi', 'foto', 'sapi_id'], 'required'],
            [['file'],'file'],
            [['kondisi', 'foto', 'sapi_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kondisi' => 'Kondisi',
            'foto' => 'Foto',
            'sapi_id' => 'Sapi ID',
        ];
    }
}
