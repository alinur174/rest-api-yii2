<?php


namespace frontend\controllers;


use frontend\models\User;
use yii\rest\ActiveController;
use frontend\models\RegisterForm;
use frontend\models\LoginForm;
use Yii;

class UserController extends ActiveController
{

    public $modelClass = User::class;

    public function actionLogin()
    {

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
            return $model->getUser();
        }
        \Yii::$app->response->statusCode = 422;
        return [
            'errors' => $model->errors
        ];

    }

    public function actionRegister()
    {

        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post(), '') && $model->register()) {
            return $model->user;
        }

        Yii::$app->response->statusCode = 422;
        return [
            'errors' => $model->errors
        ];
    }


}