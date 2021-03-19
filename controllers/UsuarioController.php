<?php

namespace app\controllers;

use app\models\Usuario;
use Yii;
use yii\filters\Cors;
use yii\rest\ActiveController;

class UsuarioController extends ActiveController
{
    public $modelClass = 'app\models\Usuario';

    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => Cors::className(),
                'cors' => [
                    // restrict access to
                    'Origin' => ['*', 'https://3.15.32.162:3000'],
                    // Allow only POST and PUT methods
                    'Access-Control-Request-Method' => ['DELETE', 'POST', 'PUT', 'GET'],
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

    public function actionLogin()
    {
        $user = Yii::$app->request->post('user');
        $pwd = Yii::$app->request->post('pwd');

        $user = Usuario::findOne(['Nb_Usuario' => $user, 'Tx_Clave' => $pwd]);
        if (empty($user))
            return ['message' => 'Los datos ingresados son incorrectos'];

        return $user->toArray();

        /*$sql = 'SELECT * FROM t00100_usuario WHERE Nb_Usuario = "'.$user.'" and Tx_Clave = "'. $pwd .'"';
        $usuario = Usuario::findBySql($sql)->one();
        return $usuario;*/
    }
}