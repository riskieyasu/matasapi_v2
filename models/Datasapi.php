<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datasapi".
 *
 * @property int $id
 * @property string $namasapi
 * @property string $rassapi
 * @property string $jeniskelamin
 * @property string $tanggallahir
 * @property int $beratbadan
 * @property int $lingkarbadan
 * @property string $date
 */
class Datasapi extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datasapi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namasapi', 'rassapi', 'jeniskelamin', 'tanggallahir', 'beratbadan', 'lingkarbadan'], 'required'],
            [['tanggallahir', 'date'], 'safe'],
            [['file'],'file'],
            [['beratbadan', 'lingkarbadan'], 'integer'],
            [['namasapi', 'rassapi', 'jeniskelamin','foto'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namasapi' => 'Namasapi',
            'rassapi' => 'Rassapi',
            'jeniskelamin' => 'Jeniskelamin',
            'tanggallahir' => 'Tanggallahir',
            'beratbadan' => 'Beratbadan',
            'lingkarbadan' => 'Lingkarbadan',
            'date' => 'Date',
            'file' => 'Foto',
        ];
    }
}
