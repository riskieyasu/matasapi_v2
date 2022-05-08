<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bcs".
 *
 * @property int $id
 * @property string $tulangbelakang
 * @property string $tulangiga
 * @property string $lemakdada
 * @property string $lemakekor
 * @property string $penyusutanotot
 * @property string $fisiksapi
 * @property int $sapi_id
 */
class Bcs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bcs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tulangbelakang', 'tulangiga', 'lemakdada', 'lemakekor', 'penyusutanotot', 'fisiksapi', 'sapi_id'], 'required'],
            [['sapi_id'], 'integer'],
            [['tulangbelakang', 'tulangiga', 'lemakdada', 'lemakekor', 'penyusutanotot', 'fisiksapi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tulangbelakang' => 'Tulang Belakang',
            'tulangiga' => 'Tulang Iga',
            'lemakdada' => 'Lemak Dada',
            'lemakekor' => 'Lemak Ekor',
            'penyusutanotot' => 'Penyusutan Otot',
            'fisiksapi' => 'Fisik Sapi',
            'sapi_id' => 'Sapi ID',
        ];
    }
}
