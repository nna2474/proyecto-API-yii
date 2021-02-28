<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\T00100Usuario;

/**
 * T00100UsuarioSearch represents the model behind the search form of `common\models\T00100Usuario`.
 */
class T00100UsuarioSearch extends T00100Usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Usuario', 'Nu_Intentos', 'St_Bloqueo', 'St_Activo', 'Co_Auditoria'], 'integer'],
            [['Nb_Usuario', 'Tx_Email', 'Nu_Movil', 'Tx_Clave', 'Tx_Patron', 'Fe_Recuperacion'], 'safe'],
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
        $query = T00100Usuario::find();

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
            'Co_Usuario' => $this->Co_Usuario,
            'Nu_Intentos' => $this->Nu_Intentos,
            'Fe_Recuperacion' => $this->Fe_Recuperacion,
            'St_Bloqueo' => $this->St_Bloqueo,
            'St_Activo' => $this->St_Activo,
            'Co_Auditoria' => $this->Co_Auditoria,
        ]);

        $query->andFilterWhere(['like', 'Nb_Usuario', $this->Nb_Usuario])
            ->andFilterWhere(['like', 'Tx_Email', $this->Tx_Email])
            ->andFilterWhere(['like', 'Nu_Movil', $this->Nu_Movil])
            ->andFilterWhere(['like', 'Tx_Clave', $this->Tx_Clave])
            ->andFilterWhere(['like', 'Tx_Patron', $this->Tx_Patron]);

        return $dataProvider;
    }
}
