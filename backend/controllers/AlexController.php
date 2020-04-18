<?php


namespace backend\controllers;


use app\models\User;
use yii\rest\ActiveController;

class AlexController extends ActiveController
{

    public $modelClass = User::class;

}