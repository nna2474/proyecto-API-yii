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
                    'Access-Control-Request-Method' => ['DELETE', 'PUT', 'POST', 'GET'],
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

        $user = Usuario::find()
            ->where(['Nb_Usuario' => $user])
            ->orWhere(['Tx_Email' => $user])
            ->asArray()
            ->one();

        if (empty($user))
            return ['error' => 'El usuario no se encuentra registrado'];

        if (!Yii::$app->security->validatePassword($pwd, $user['Tx_Clave']))
            return ['error' => 'Los datos del usuario son incorrectos'];

        return $user;
        /*$sql = 'SELECT * FROM t00100_usuario WHERE Nb_Usuario = "'.$user.'" and Tx_Clave = "'. $pwd .'"';
        $usuario = Usuario::findBySql($sql)->one();
        return $usuario;*/
    }

    public function actionRegister()
    {
        $user = Yii::$app->request->post('user');
        $email = Yii::$app->request->post('email');
        $mobile = Yii::$app->request->post('mobile');
        $password = Yii::$app->request->post('password');
        $patron = Yii::$app->request->post('patron');

        return Usuario::newUser($user, $email, $mobile, $password, $patron);
    }

    public function actionSetUserStatus()
    {
        $username = Yii::$app->request->post('username');
        $status = Yii::$app->request->post('status');

        $user = Usuario::find()
            ->where(['Nb_Usuario' => $username])
            ->asArray()
            ->one();

        if (empty($user))
            return ['error' => 'El usuario no se encuentra registrado'];

        Usuario::updateAll(['St_Activo' => !empty($status) ? 1 : 0], ['Co_Usuario' => $user['Co_Usuario']]);

        return [
            'user' => $user['Nb_Usuario'],
            'status' => !empty($status) ? 1 : 0,
            'message' => 'Status actualizado'
        ];
    }
}