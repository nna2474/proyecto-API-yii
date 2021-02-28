<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%t99999_auditoria}}".
 *
 * @property int $Co_Auditoria
 * @property string $Nb_Tabla
 * @property int|null $Co_Fila
 * @property string $Co_Tipo_Operacion
 * @property string $Tx_Sentencia
 * @property string|null $Tx_Error
 * @property int|null $Co_Auditoria_Auditoria
 * @property int $Co_Usuario
 * @property string|null $Co_MAC
 * @property string|null $Co_IP
 * @property string $Fe_Ins
 * @property int $St_Error
 *
 * @property T00040Servicio[] $t00040Servicios
 * @property T00060Funcion[] $t00060Funcions
 * @property T00070FuncionServicio[] $t00070FuncionServicios
 * @property T00100Usuario[] $t00100Usuarios
 * @property T99999Auditoria $coAuditoriaAuditoria
 * @property T99999Auditoria[] $t99999Auditorias
 */
class T99999Auditoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t99999_auditoria}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nb_Tabla', 'Co_Tipo_Operacion', 'Tx_Sentencia', 'Co_Usuario'], 'required'],
            [['Co_Fila', 'Co_Auditoria_Auditoria', 'Co_Usuario', 'St_Error'], 'integer'],
            [['Fe_Ins'], 'safe'],
            [['Nb_Tabla'], 'string', 'max' => 255],
            [['Co_Tipo_Operacion'], 'string', 'max' => 10],
            [['Tx_Sentencia', 'Tx_Error'], 'string', 'max' => 5000],
            [['Co_MAC'], 'string', 'max' => 1],
            [['Co_IP'], 'string', 'max' => 40],
            [['Co_Auditoria_Auditoria'], 'exist', 'skipOnError' => true, 'targetClass' => T99999Auditoria::className(), 'targetAttribute' => ['Co_Auditoria_Auditoria' => 'Co_Auditoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Co_Auditoria' => 'Co Auditoria',
            'Nb_Tabla' => 'Nb Tabla',
            'Co_Fila' => 'Co Fila',
            'Co_Tipo_Operacion' => 'Co Tipo Operacion',
            'Tx_Sentencia' => 'Tx Sentencia',
            'Tx_Error' => 'Tx Error',
            'Co_Auditoria_Auditoria' => 'Co Auditoria Auditoria',
            'Co_Usuario' => 'Co Usuario',
            'Co_MAC' => 'Co Mac',
            'Co_IP' => 'Co Ip',
            'Fe_Ins' => 'Fe Ins',
            'St_Error' => 'St Error',
        ];
    }

    /**
     * Gets query for [[T00040Servicios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T00040ServicioQuery
     */
    public function getT00040Servicios()
    {
        return $this->hasMany(T00040Servicio::className(), ['Co_Auditoria' => 'Co_Auditoria']);
    }

    /**
     * Gets query for [[T00060Funcions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T00060FuncionQuery
     */
    public function getT00060Funcions()
    {
        return $this->hasMany(T00060Funcion::className(), ['Co_Auditoria' => 'Co_Auditoria']);
    }

    /**
     * Gets query for [[T00070FuncionServicios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T00070FuncionServicioQuery
     */
    public function getT00070FuncionServicios()
    {
        return $this->hasMany(T00070FuncionServicio::className(), ['Co_Auditoria' => 'Co_Auditoria']);
    }

    /**
     * Gets query for [[T00100Usuarios]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T00100UsuarioQuery
     */
    public function getT00100Usuarios()
    {
        return $this->hasMany(T00100Usuario::className(), ['Co_Auditoria' => 'Co_Auditoria']);
    }

    /**
     * Gets query for [[CoAuditoriaAuditoria]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T99999AuditoriaQuery
     */
    public function getCoAuditoriaAuditoria()
    {
        return $this->hasOne(T99999Auditoria::className(), ['Co_Auditoria' => 'Co_Auditoria_Auditoria']);
    }

    /**
     * Gets query for [[T99999Auditorias]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T99999AuditoriaQuery
     */
    public function getT99999Auditorias()
    {
        return $this->hasMany(T99999Auditoria::className(), ['Co_Auditoria_Auditoria' => 'Co_Auditoria']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\T99999AuditoriaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\T99999AuditoriaQuery(get_called_class());
    }
}
