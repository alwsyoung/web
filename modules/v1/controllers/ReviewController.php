<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.04.2020
 * Time: 15:11
 */
namespace app\modules\v1\controllers;
use yii\rest\ActiveController;

class ReviewController extends ActiveController
{
    public $modelClass = 'app\models\Review';
}