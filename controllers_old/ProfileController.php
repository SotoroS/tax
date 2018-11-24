<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2018
 * Time: 6:57
 */

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class ProfileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}