<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $accessToken
 * @property string $createdAt
 * @property string|null $updatedAt
 */
class User extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['login', 'password', 'accessToken'], 'string', 'max' => 128],
            [['login'], 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'accessToken' => 'Access Token',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    public function beforeSave($insert){
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->accessToken = Yii::$app->security->generateRandomString();
        $this->password = Yii::$app->security->generatePasswordHash($this->password);
        return true;
    }


    /*
     * @param password
     * @return
     */
    public function validatePassword($password){
        Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * поиск пользователя по логину
     * @param $login
     * @return User|null
     */

    public static function findByLogin($login){
        return User::findOne(['login'=> $login]);
    }
}

