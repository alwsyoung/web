<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.04.2020
 * Time: 16:01
 */

namespace app\modules\v1\controllers;


use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}