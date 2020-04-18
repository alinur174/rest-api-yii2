<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();


echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordInput();


echo Html::submitButton('Войти');

ActiveForm::end();

