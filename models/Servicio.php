<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t00040_servicio".
 *
 * @property int $Co_Servicio
 * @property string $Nb_Servicio
 * @property string $Co_App_Id
 * @property string $Co_URL
 * @property string $Co_Password
 * @property string $Co_Inquilino
 * @property string|null $Co_IP
 * @property int $St_Activo
 * @property int|null $Co_Auditoria
 *
 * @property T99999Auditoria $coAuditoria
 * @property T00070FuncionServicio[] $t00070FuncionServicios
 * @property T00070FuncionServicio[] $t00070FuncionServicios0
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't00040_servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nb_Servicio', 'Co_App_Id', 'Co_URL', 'Co_Password', 'Co_Inquilino'], 'required'],
            [['St_Activo', 'Co_Auditoria'], 'integer'],
            [['Nb_Servicio', 'Co_App_Id'], 'string', 'max' => 1500],
            [['Co_URL', 'Co_Inquilino'], 'string', 'max' => 2500],
            [['Co_Password'], 'string', 'max' => 500],
            [['Co_IP'], 'string', 'max' => 40],
            [['Co_Auditoria'], 'exist', 'skipOnError' => true, 'targetClass' => Auditoria::className(), 'targetAttribute' => ['Co_Auditoria' => 'Co_Auditoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Co_Servicio' => 'Co Servicio',
            'Nb_Servicio' => 'Nb Servicio',
            'Co_App_Id' => 'Co App ID',
            'Co_URL' => 'Co Url',
            'Co_Password' => 'Co Password',
            'Co_Inquilino' => 'Co Inquilino',
            'Co_IP' => 'Co Ip',
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
        return $this->hasMany(T00070FuncionServicio::className(), ['Co_Servicio_Fin' => 'Co_Servicio']);
    }

    /**
     * Gets query for [[T00070FuncionServicios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getT00070FuncionServicios0()
    {
        return $this->hasMany(T00070FuncionServicio::className(), ['Co_Servicio_Inicio' => 'Co_Servicio']);
    }
}
