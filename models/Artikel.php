<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artikel".
 *
 * @property int $id
 * @property string $judul
 * @property string $kategori
 * @property string $isi
 */
class Artikel extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artikel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'kategori', 'isi'], 'required'],
            [['file'],'file'],
            [['judul', 'foto', 'kategori'], 'string', 'max' => 255],
            [['isi'], 'string', 'max' => 5000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'kategori' => 'Kategori',
            'isi' => 'Isi',
            'foto' => 'Foto',
        ];
    }
}
