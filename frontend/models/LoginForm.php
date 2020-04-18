<?php


namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\User;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends \common\models\LoginForm
{
    public $_user = false;

    /**
     * @return \app\models\User|UserResource|bool|null
     * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}