<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%t99999_bitacora}}".
 *
 * @property int $Co_Bitacora
 * @property int $Co_Bitacora_Previo
 * @property int $Co_Usuario
 * @property string $Fe_Ins
 *
 * @property T99999Bitacora $coBitacoraPrevio
 * @property T99999Bitacora[] $t99999Bitacoras
 * @property T00100Usuario $coUsuario
 */
class T99999Bitacora extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%t99999_bitacora}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Bitacora_Previo', 'Co_Usuario'], 'required'],
            [['Co_Bitacora_Previo', 'Co_Usuario'], 'integer'],
            [['Fe_Ins'], 'safe'],
            [['Co_Bitacora_Previo'], 'exist', 'skipOnError' => true, 'targetClass' => T99999Bitacora::className(), 'targetAttribute' => ['Co_Bitacora_Previo' => 'Co_Bitacora']],
            [['Co_Usuario'], 'exist', 'skipOnError' => true, 'targetClass' => T00100Usuario::className(), 'targetAttribute' => ['Co_Usuario' => 'Co_Usuario']],
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
     * @return \yii\db\ActiveQuery|\common\models\query\T99999BitacoraQuery
     */
    public function getCoBitacoraPrevio()
    {
        return $this->hasOne(T99999Bitacora::className(), ['Co_Bitacora' => 'Co_Bitacora_Previo']);
    }

    /**
     * Gets query for [[T99999Bitacoras]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T99999BitacoraQuery
     */
    public function getT99999Bitacoras()
    {
        return $this->hasMany(T99999Bitacora::className(), ['Co_Bitacora_Previo' => 'Co_Bitacora']);
    }

    /**
     * Gets query for [[CoUsuario]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\T00100UsuarioQuery
     */
    public function getCoUsuario()
    {
        return $this->hasOne(T00100Usuario::className(), ['Co_Usuario' => 'Co_Usuario']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\T99999BitacoraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\T99999BitacoraQuery(get_called_class());
    }
}
