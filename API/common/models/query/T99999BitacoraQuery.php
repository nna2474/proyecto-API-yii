<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\T99999Bitacora]].
 *
 * @see \common\models\T99999Bitacora
 */
class T99999BitacoraQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\T99999Bitacora[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\T99999Bitacora|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
