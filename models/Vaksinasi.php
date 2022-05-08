<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vaksinasi".
 *
 * @property int $id
 * @property string $namavaksin
 * @property string $tanggalvaksin
 * @property string $pemberivaksin
 * @property string $keterangan
 * @property int $datasapi_id
 */
class Vaksinasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vaksinasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namavaksin', 'tanggalvaksin', 'pemberivaksin', 'keterangan', 'datasapi_id'], 'required'],
            [['tanggalvaksin'], 'safe'],
            [['datasapi_id'], 'integer'],
            [['namavaksin', 'pemberivaksin', 'keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namavaksin' => 'Nama Vaksin :',
            'tanggalvaksin' => 'Tanggal Vaksin :',
            'pemberivaksin' => 'Pemberi Vaksin :',
            'keterangan' => 'Keterangan :',
            'datasapi_id' => 'Id sapi :',
        ];
    }

 
}
