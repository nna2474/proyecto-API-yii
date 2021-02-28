<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\T99999Auditoria;

/**
 * T99999AuditoriaSearch represents the model behind the search form of `common\models\T99999Auditoria`.
 */
class T99999AuditoriaSearch extends T99999Auditoria
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Auditoria', 'Co_Fila', 'Co_Auditoria_Auditoria', 'Co_Usuario', 'St_Error'], 'integer'],
            [['Nb_Tabla', 'Co_Tipo_Operacion', 'Tx_Sentencia', 'Tx_Error', 'Co_MAC', 'Co_IP', 'Fe_Ins'], 'safe'],
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
        $query = T99999Auditoria::find();

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
            'Co_Auditoria' => $this->Co_Auditoria,
            'Co_Fila' => $this->Co_Fila,
            'Co_Auditoria_Auditoria' => $this->Co_Auditoria_Auditoria,
            'Co_Usuario' => $this->Co_Usuario,
            'Fe_Ins' => $this->Fe_Ins,
            'St_Error' => $this->St_Error,
        ]);

        $query->andFilterWhere(['like', 'Nb_Tabla', $this->Nb_Tabla])
            ->andFilterWhere(['like', 'Co_Tipo_Operacion', $this->Co_Tipo_Operacion])
            ->andFilterWhere(['like', 'Tx_Sentencia', $this->Tx_Sentencia])
            ->andFilterWhere(['like', 'Tx_Error', $this->Tx_Error])
            ->andFilterWhere(['like', 'Co_MAC', $this->Co_MAC])
            ->andFilterWhere(['like', 'Co_IP', $this->Co_IP]);

        return $dataProvider;
    }
}
