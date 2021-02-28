<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\T99999Auditoria]].
 *
 * @see \common\models\T99999Auditoria
 */
class T99999AuditoriaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\T99999Auditoria[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\T99999Auditoria|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
