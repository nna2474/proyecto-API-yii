<?php

namespace app\controllers;

use yii\filters\Cors;
use yii\rest\ActiveController;

class ServicioController extends ActiveController
{
    public $modelClass = 'app\models\Servicio';

    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => Cors::className(),
                'cors' => [
                    // restrict access to
                    'Origin' => ['*', 'https://3.15.32.162:3000'],
                    // Allow only POST and PUT methods
                    'Access-Control-Request-Method' => ['DELETE', 'PUT'],
                    // Allow only headers 'X-Wsse'
                    'Access-Control-Request-Headers' => ['*'],
                    // Allow credentials (cookies, authorization headers, etc.) to be exposed to the browser
                    'Access-Control-Allow-Credentials' => null,
                    // Allow OPTIONS caching
                    'Access-Control-Max-Age' => 3600,
                    // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                    'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
                ],

            ],
        ];
    }

    public function actionTest()
    {
        return 'prueba';
    }
}