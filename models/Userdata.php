<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userdata".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 */
class Userdata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userdata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'email'], 'required'],
            [['nama', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama Pengguna',
            'email' => 'Email',
        ];
    }
}
