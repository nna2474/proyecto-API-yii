<?php

namespace app\controllers;

use yii\rest\ActiveController;

class TestController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function actionTestFunction()
    {
        return 'Función de prueba';
    }

}