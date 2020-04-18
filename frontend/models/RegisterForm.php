<?php


namespace frontend\models;


use frontend\models\User;
//use app\modules\api\resources\UserResource;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegisterForm extends Model
{
    public $username;
    public $password;
    public $number;
    public $password_repeat;

    public $user = null;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'password', 'number', 'password_repeat'], 'required'],
            ['password', 'compare', 'compareAttribute' => 'password_repeat'],
            ['number', 'unique',
                'targetClass' => '\frontend\models\User',
                'message' => 'Пользователь с таким номером уже существует в базе'
            ],
        ];
    }

    public function register()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
            $user->access_token = Yii::$app->security->generateRandomString();
            $user->number = $this->number;
            $this->user = $user;
            if ($user->save()) {
                return Yii::$app->user->login($user, 0);
            }
            return false;
        }
        return false;
    }

}