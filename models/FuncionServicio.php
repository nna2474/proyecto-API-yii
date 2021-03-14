<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t00070_funcion_servicio".
 *
 * @property int $Co_Funcion_Servicio
 * @property int $Co_Funcion
 * @property int $Co_Servicio_Inicio
 * @property int $Co_Servicio_Fin
 * @property int $St_Opcional
 * @property int $Nu_Orden
 * @property int $Ti_Minimo
 * @property int|null $Ti_Maximo
 * @property int $St_Activo
 * @property int|null $Co_Auditoria
 *
 * @property T99999Auditoria $coAuditoria
 * @property T00060Funcion $coFuncion
 * @property T00040Servicio $coServicioFin
 * @property T00040Servicio $coServicioInicio
 */
class FuncionServicio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't00070_funcion_servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Funcion', 'Co_Servicio_Inicio', 'Co_Servicio_Fin'], 'required'],
            [['Co_Funcion', 'Co_Servicio_Inicio', 'Co_Servicio_Fin', 'St_Opcional', 'Nu_Orden', 'Ti_Minimo', 'Ti_Maximo', 'St_Activo', 'Co_Auditoria'], 'integer'],
            [['Co_Auditoria'], 'exist', 'skipOnError' => true, 'targetClass' => Auditoria::className(), 'targetAttribute' => ['Co_Auditoria' => 'Co_Auditoria']],
            [['Co_Funcion'], 'exist', 'skipOnError' => true, 'targetClass' => Funcion::className(), 'targetAttribute' => ['Co_Funcion' => 'Co_Funcion']],
            [['Co_Servicio_Fin'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['Co_Servicio_Fin' => 'Co_Servicio']],
            [['Co_Servicio_Inicio'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['Co_Servicio_Inicio' => 'Co_Servicio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Co_Funcion_Servicio' => 'Co Funcion Servicio',
            'Co_Funcion' => 'Co Funcion',
            'Co_Servicio_Inicio' => 'Co Servicio Inicio',
            'Co_Servicio_Fin' => 'Co Servicio Fin',
            'St_Opcional' => 'St Opcional',
            'Nu_Orden' => 'Nu Orden',
            'Ti_Minimo' => 'Ti Minimo',
            'Ti_Maximo' => 'Ti Maximo',
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
     * Gets query for [[CoFuncion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoFuncion()
    {
        return $this->hasOne(T00060Funcion::className(), ['Co_Funcion' => 'Co_Funcion']);
    }

    /**
     * Gets query for [[CoServicioFin]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoServicioFin()
    {
        return $this->hasOne(T00040Servicio::className(), ['Co_Servicio' => 'Co_Servicio_Fin']);
    }

    /**
     * Gets query for [[CoServicioInicio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoServicioInicio()
    {
        return $this->hasOne(T00040Servicio::className(), ['Co_Servicio' => 'Co_Servicio_Inicio']);
    }
}
