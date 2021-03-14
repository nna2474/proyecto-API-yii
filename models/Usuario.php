<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t00100_usuario".
 *
 * @property int $Co_Usuario
 * @property string $Nb_Usuario
 * @property string $Tx_Email
 * @property string|null $Nu_Movil
 * @property string $Tx_Clave
 * @property string|null $Tx_Patron
 * @property int $Nu_Intentos
 * @property string|null $Fe_Recuperacion
 * @property int|null $St_Bloqueo
 * @property int $St_Activo
 * @property int|null $Co_Auditoria
 *
 * @property T99999Auditoria $coAuditoria
 * @property T99999Bitacora[] $t99999Bitacoras
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't00100_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nb_Usuario', 'Tx_Email', 'Tx_Clave'], 'required'],
            [['Nu_Intentos', 'St_Bloqueo', 'St_Activo', 'Co_Auditoria'], 'integer'],
            [['Fe_Recuperacion'], 'safe'],
            [['Nb_Usuario', 'Tx_Clave'], 'string', 'max' => 100],
            [['Tx_Email'], 'string', 'max' => 500],
            [['Nu_Movil', 'Tx_Patron'], 'string', 'max' => 20],
            [['Tx_Email'], 'unique'],
            [['Nb_Usuario'], 'unique'],
            [['Co_Auditoria'], 'exist', 'skipOnError' => true, 'targetClass' => Auditoria::className(), 'targetAttribute' => ['Co_Auditoria' => 'Co_Auditoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Co_Usuario' => 'Co Usuario',
            'Nb_Usuario' => 'Nb Usuario',
            'Tx_Email' => 'Tx Email',
            'Nu_Movil' => 'Nu Movil',
            'Tx_Clave' => 'Tx Clave',
            'Tx_Patron' => 'Tx Patron',
            'Nu_Intentos' => 'Nu Intentos',
            'Fe_Recuperacion' => 'Fe Recuperacion',
            'St_Bloqueo' => 'St Bloqueo',
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
     * Gets query for [[T99999Bitacoras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getT99999Bitacoras()
    {
        return $this->hasMany(T99999Bitacora::className(), ['Co_Usuario' => 'Co_Usuario']);
    }
}
