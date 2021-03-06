<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newuser".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 */
class NewUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'string', 'max' => 80],
            [['password'],'string','min'=>8],
            [['authKey', 'accessToken'], 'string', 'max' => 255],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
           
            'username' => Yii::t('app', 'Username :'),
            'email' => Yii::t('app', 'Email :'),
            'password' => Yii::t('app', 'Password :'),
           
        ];
    }
     public static function findIdentity($id)
     {
         return self::findOne($id);
     }
     public static function findIdentityByAccessToken($token, $type = null)
     {
      return self::findOne((['accessToken'=>$token]));   
     }
     public static function findByUsername($username){
         return self::findOne((['username'=>$username]));   
     }
     public function getId(){
         return $this->id;
     }
     public function getAuthKey()
     {
        return $this->authKey;
    }
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    public function validatePassword($password){
        return password_verify($password, $this->password);

    }
}
