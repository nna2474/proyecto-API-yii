<?php

namespace app\controllers;

use yii\base\Controller;

class AuditoriaController extends Controller
{
    public $modelClass = 'app\models\Auditoria';

    public function behaviors()
    {
        return [
            /*'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
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

            ],*/
        ];
    }

    private $_oldattributes = array();

    public function afterSave($event)
    {
        if (!$this->Owner->isNewRecord) {

            // new attributes
            $newattributes = $this->Owner->getAttributes();
            $oldattributes = $this->getOldAttributes();

            // compare old and new
            foreach ($newattributes as $name => $value) {
                if (!empty($oldattributes)) {
                    $old = $oldattributes[$name];
                } else {
                    $old = '';
                }

                if ($value != $old) {
                    //$changes = $name . ' ('.$old.') => ('.$value.'), ';
                    
                    $log = new ActiveRecordLog;
                    $log->description = 'User ' . Yii::app()->user->Name
                        . ' changed ' . $name . ' for '
                        . get_class($this->Owner)
                        . '[' . $this->Owner->getPrimaryKey() . '].';
                    $log->action = 'CHANGE';
                    $log->model = get_class($this->Owner);
                    $log->idModel = $this->Owner->getPrimaryKey();
                    $log->field = $name;
                    $log->creationdate = new CDbExpression('NOW()');
                    $log->userid = Yii::app()->user->id;
                    $log->save();
                }
            }
        } else {
            $log = new ActiveRecordLog;
            $log->description = 'User ' . Yii::app()->user->Name
                . ' created ' . get_class($this->Owner)
                . '[' . $this->Owner->getPrimaryKey() . '].';
            $log->action = 'CREATE';
            $log->model = get_class($this->Owner);
            $log->idModel = $this->Owner->getPrimaryKey();
            $log->field = '';
            $log->creationdate = new CDbExpression('NOW()');
            $log->userid = Yii::app()->user->id;
            $log->save();
        }
    }

    public function afterDelete($event)
    {
        $log = new ActiveRecordLog;
        $log->description = 'User ' . Yii::app()->user->Name . ' deleted '
            . get_class($this->Owner)
            . '[' . $this->Owner->getPrimaryKey() . '].';
        $log->action = 'DELETE';
        $log->model = get_class($this->Owner);
        $log->idModel = $this->Owner->getPrimaryKey();
        $log->field = '';
        $log->creationdate = new CDbExpression('NOW()');
        $log->userid = Yii::app()->user->id;
        $log->save();
    }

    public function afterFind($event)
    {
        // Save old values
        $this->setOldAttributes($this->Owner->getAttributes());
    }

    public function getOldAttributes()
    {
        return $this->_oldattributes;
    }

    public function setOldAttributes($value)
    {
        $this->_oldattributes = $value;
    }

}