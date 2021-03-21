<?php

namespace app\models;

use ruturajmaniyar\mod\audit\behaviors\AuditEntryBehaviors;
use Yii;
use yii\base\Exception;

/**
 * This is the model class for table "t99999_bitacora".
 *
 * @property int $Co_Bitacora
 * @property int $Co_Bitacora_Previo
 * @property int $Co_Usuario
 * @property string $Fe_Ins
 *
 * @property Bitacora $coBitacoraPrevio
 * @property Bitacora[] $bitacoras
 * @property T00100Usuario $coUsuario
 */
class Bitacora extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't99999_bitacora';
    }

    public function behaviors()
    {
        return [
            'auditEntryBehaviors' => [
                'class' => AuditEntryBehaviors::class
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Usuario'], 'required'],
            [['Co_Bitacora_Previo', 'Co_Usuario'], 'integer'],
            [['Fe_Ins'], 'safe'],
            [['Co_Bitacora_Previo'], 'exist', 'skipOnError' => true, 'targetClass' => Bitacora::className(), 'targetAttribute' => ['Co_Bitacora_Previo' => 'Co_Bitacora']],
            [['Co_Usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['Co_Usuario' => 'Co_Usuario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Co_Bitacora' => 'Co Bitacora',
            'Co_Bitacora_Previo' => 'Co Bitacora Previo',
            'Co_Usuario' => 'Co Usuario',
            'Fe_Ins' => 'Fe Ins',
        ];
    }

    /**
     * Gets query for [[CoBitacoraPrevio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoBitacoraPrevio()
    {
        return $this->hasOne(Bitacora::className(), ['Co_Bitacora' => 'Co_Bitacora_Previo']);
    }

    /**
     * Gets query for [[Bitacoras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBitacoras()
    {
        return $this->hasMany(Bitacora::className(), ['Co_Bitacora_Previo' => 'Co_Bitacora']);
    }

    /**
     * Gets query for [[CoUsuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoUsuario()
    {
        return $this->hasOne(T00100Usuario::className(), ['Co_Usuario' => 'Co_Usuario']);
    }

    public static function newBitacora($bitacoraP, $user)
    {
        $tem = new self();
        $tem->Co_Bitacora_Previo = $bitacoraP;
        $tem->Co_Usuario = $user;

        $tem->save();
        return $tem->toArray();
    }
}
