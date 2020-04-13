<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.04.2020
 * Time: 17:06
 */

namespace app\modules\v1\controllers;


use app\modules\v1\models\LoginForm;
use yii\rest\Controller;

class AppController extends Controller
{
    /**
     * Авторизация.
     * @return \app\models\User|LoginForm|null
     * @throws \yii\base\InvalidConfigException
     */
    public function actionLogin(){
        $model = new LoginForm();
        $model->load(\Yii::$app->request->getBodyParams(), '');

        if ($model->validate()) {
            return $model->getUser();
        }
        return $model;
    }
}