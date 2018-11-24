<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2018
 * Time: 5:41
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{

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