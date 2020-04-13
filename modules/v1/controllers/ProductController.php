<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.04.2020
 * Time: 15:09
 */
namespace app\modules\v1\controllers;
use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Product';
}