<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t00060_funcion".
 *
 * @property int $Co_Funcion
 * @property string $Nb_Funcion
 * @property string $Fe_Inicio
 * @property string|null $Fe_Fin
 * @property int $St_Activo
 * @property int|null $Co_Auditoria
 *
 * @property T99999Auditoria $coAuditoria
 * @property T00070FuncionServicio[] $t00070FuncionServicios
 */
class Funcion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't00060_funcion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nb_Funcion'], 'required'],
            [['Fe_Inicio', 'Fe_Fin'], 'safe'],
            [['St_Activo', 'Co_Auditoria'], 'integer'],
            [['Nb_Funcion'], 'string', 'max' => 1500],
            [['Co_Auditoria'], 'exist', 'skipOnError' => true, 'targetClass' => Auditoria::className(), 'targetAttribute' => ['Co_Auditoria' => 'Co_Auditoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Co_Funcion' => 'Co Funcion',
            'Nb_Funcion' => 'Nb Funcion',
            'Fe_Inicio' => 'Fe Inicio',
            'Fe_Fin' => 'Fe Fin',
            'St_Activo' => 'St Activo',
            'Co_Auditoria' => 'Co Auditoria',
        ];
    }

    /**
     * Gets query for [[CoAuditoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoAuditoria()
    {
        return $this->hasOne(T99999Auditoria::className(), ['Co_Auditoria' => 'Co_Auditoria']);
    }

    /**
     * Gets query for [[T00070FuncionServicios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getT00070FuncionServicios()
    {
        return $this->hasMany(T00070FuncionServicio::className(), ['Co_Funcion' => 'Co_Funcion']);
    }
}
