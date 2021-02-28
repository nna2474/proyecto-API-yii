<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\T00070FuncionServicio]].
 *
 * @see \common\models\T00070FuncionServicio
 */
class T00070FuncionServicioQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\T00070FuncionServicio[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\T00070FuncionServicio|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
