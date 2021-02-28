<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\T00040Servicio;

/**
 * T00040ServicioSearch represents the model behind the search form of `common\models\T00040Servicio`.
 */
class T00040ServicioSearch extends T00040Servicio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Servicio', 'St_Activo', 'Co_Auditoria'], 'integer'],
            [['Nb_Servicio', 'Co_App_Id', 'Co_URL', 'Co_Password', 'Co_Inquilino', 'Co_IP'], 'safe'],
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
        $query = T00040Servicio::find();

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
            'Co_Servicio' => $this->Co_Servicio,
            'St_Activo' => $this->St_Activo,
            'Co_Auditoria' => $this->Co_Auditoria,
        ]);

        $query->andFilterWhere(['like', 'Nb_Servicio', $this->Nb_Servicio])
            ->andFilterWhere(['like', 'Co_App_Id', $this->Co_App_Id])
            ->andFilterWhere(['like', 'Co_URL', $this->Co_URL])
            ->andFilterWhere(['like', 'Co_Password', $this->Co_Password])
            ->andFilterWhere(['like', 'Co_Inquilino', $this->Co_Inquilino])
            ->andFilterWhere(['like', 'Co_IP', $this->Co_IP]);

        return $dataProvider;
    }
}
