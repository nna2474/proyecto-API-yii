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
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['POST', 'GET', 'PUT', 'UPDATE', 'DELETE', 'CREATE'],
                    'Access-Control-Request-Headers' => ['Authorization', 'Content-type', 'Credentials'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age' => 3600
                ],
            ],
        ];

    }

}