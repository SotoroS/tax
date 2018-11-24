<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2018
 * Time: 0:44
 */

namespace app\models\auth;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{

    public $login;
    public $name;
    public $patronymic;
    public $surname;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['login', 'trim'],
            ['login', 'required'],
            ['login', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This login has already been taken.'],
            ['login', 'string', 'min' => 2, 'max' => 255],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();

        $user->login = $this->login;

        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

}