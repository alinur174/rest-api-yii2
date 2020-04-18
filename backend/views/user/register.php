<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\RegisterForm;


$form = ActiveForm::begin();

echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'role');

echo Html::submitButton('Регистрация');

ActiveForm::end();