<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2018
 * Time: 7:44
 */

namespace app\controllers\api;

use yii\rest\ActiveController;

class ApiController extends ActiveController
{
    public $modelClass = 'app\models\Address';
    public $enableCsrfValidation = false;


/**
 * List of allowed domains.
 * Note: Restriction works only for AJAX (using CORS, is not secure).
 *
 * @return array List of domains, that can access to this API
 */
public static function allowedDomains() {
    return [
        '*',                        // star allows all domains
        'http://test1.example.com',
        'http://test2.example.com',
    ];
}

/**
 * @inheritdoc
 */
public function behaviors() {
    return array_merge(parent::behaviors(), [

        // For cross-domain AJAX request
        'corsFilter'  => [
            'class' => \yii\filters\Cors::className(),
            'cors'  => [
                // restrict access to domains:
                'Origin'                           => static::allowedDomains(),
                'Access-Control-Request-Method'    => ['POST'],
                'Access-Control-Allow-Credentials' => true,
                'Access-Control-Max-Age'           => 3600,                 // Cache (seconds)
            ],
        ],

    ]);
}

    public function actionGetAddress($value)
    {
        return "bla";
    }
}