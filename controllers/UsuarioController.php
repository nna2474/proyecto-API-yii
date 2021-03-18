<?php

namespace app\controllers;

use app\models\Usuario;
use yii\rest\ActiveController;

class UsuarioController extends ActiveController
{
    public $modelClass = 'app\models\Usuario';

    public function actionLogin($user, $psw)
    {
        $sql = 'SELECT * FROM t00100_usuario WHERE Nb_Usuario = "'.$user.'" and Tx_Clave = "'. $psw .'"';
        $usuario = Usuario::findBySql($sql)->one();
        return $usuario;
    }
}