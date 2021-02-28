<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\T00060Funcion;

/**
 * T00060FuncionSearch represents the model behind the search form of `common\models\T00060Funcion`.
 */
class T00060FuncionSearch extends T00060Funcion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Funcion', 'St_Activo', 'Co_Auditoria'], 'integer'],
            [['Nb_Funcion', 'Fe_Inicio', 'Fe_Fin'], 'safe'],
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
        $query = T00060Funcion::find();

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
            'Co_Funcion' => $this->Co_Funcion,
            'Fe_Inicio' => $this->Fe_Inicio,
            'Fe_Fin' => $this->Fe_Fin,
            'St_Activo' => $this->St_Activo,
            'Co_Auditoria' => $this->Co_Auditoria,
        ]);

        $query->andFilterWhere(['like', 'Nb_Funcion', $this->Nb_Funcion]);

        return $dataProvider;
    }
}
