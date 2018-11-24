<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2018
 * Time: 5:41
 */

namespace app\controllers\profile;

use Yii;
use yii\web\Controller;

class CarController extends Controller
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