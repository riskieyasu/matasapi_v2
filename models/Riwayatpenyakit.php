<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riwayatpenyakit".
 *
 * @property int $id
 * @property string $namapenyakit
 * @property string $tanggalsakit
 * @property string $tanggalsembuh
 * @property string $pendiagnosa
 * @property string $keterangan
 * @property string $sapi_id
 */
class Riwayatpenyakit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayatpenyakit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namapenyakit', 'tanggalsakit', 'tanggalsembuh', 'pendiagnosa', 'keterangan', 'sapi_id'], 'required'],
            [['tanggalsakit', 'tanggalsembuh'], 'safe'],
            [['namapenyakit', 'pendiagnosa', 'keterangan', 'sapi_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namapenyakit' => 'Namapenyakit',
            'tanggalsakit' => 'Tanggalsakit',
            'tanggalsembuh' => 'Tanggalsembuh',
            'pendiagnosa' => 'Pendiagnosa',
            'keterangan' => 'Keterangan',
            'sapi_id' => 'Sapi ID',
        ];
    }
}
