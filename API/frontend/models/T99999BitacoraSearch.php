<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\T99999Bitacora;

/**
 * T99999BitacoraSearch represents the model behind the search form of `common\models\T99999Bitacora`.
 */
class T99999BitacoraSearch extends T99999Bitacora
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Bitacora', 'Co_Bitacora_Previo', 'Co_Usuario'], 'integer'],
            [['Fe_Ins'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = T99999Bitacora::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Co_Bitacora' => $this->Co_Bitacora,
            'Co_Bitacora_Previo' => $this->Co_Bitacora_Previo,
            'Co_Usuario' => $this->Co_Usuario,
            'Fe_Ins' => $this->Fe_Ins,
        ]);

        return $dataProvider;
    }
}
