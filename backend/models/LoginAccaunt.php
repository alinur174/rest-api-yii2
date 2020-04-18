<?php


namespace app\models;


use backend\controllers\TraitnId;
use yii\base\Model;
use Yii;

class LoginAccaunt extends Model
{
    use TraitnId;

    public $email;
    public $password;

    public function passwordValidate($attribute, $params)
    {
        $user = User::findByEmail($this->email);

        if ($user) {
            if (!Yii::$app->security->validatePassword($this->password, $user->password)) {
                $this->addError($attribute, 'password error');
            }

        }
    }


    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['password', 'passwordValidate']
        ];
    }


    public function login()
    {
        if ($this->validate()) {
            $user = User::findByEmail($this->email);
            return Yii::$app->user->login($user);

        }

    }

}