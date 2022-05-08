<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hidung".
 *
 * @property int $id
 * @property string $kondisi
 * @property string $foto
 * @property int $sapi_id
 */
class Hidung extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hidung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kondisi', 'foto', 'sapi_id'], 'required'],
            [['sapi_id'], 'integer'],
            [['file'],'file'],
            [['kondisi', 'foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kondisi' => 'Bagaimanakah kondisi hidung sapi ?',
            'foto' => 'Foto :',
            'sapi_id' => 'Sapi ID :',
        ];
    }
}
