<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\T00100Usuario]].
 *
 * @see \common\models\T00100Usuario
 */
class T00100UsuarioQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\T00100Usuario[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\T00100Usuario|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
