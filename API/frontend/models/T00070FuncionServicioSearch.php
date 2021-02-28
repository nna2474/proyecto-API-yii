<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\T00070FuncionServicio;

/**
 * T00070FuncionServicioSearch represents the model behind the search form of `common\models\T00070FuncionServicio`.
 */
class T00070FuncionServicioSearch extends T00070FuncionServicio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Co_Funcion_Servicio', 'Co_Funcion', 'Co_Servicio_Inicio', 'Co_Servicio_Fin', 'St_Opcional', 'Nu_Orden', 'Ti_Minimo', 'Ti_Maximo', 'St_Activo', 'Co_Auditoria'], 'integer'],
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
        $query = T00070FuncionServicio::find();

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
            'Co_Funcion_Servicio' => $this->Co_Funcion_Servicio,
            'Co_Funcion' => $this->Co_Funcion,
            'Co_Servicio_Inicio' => $this->Co_Servicio_Inicio,
            'Co_Servicio_Fin' => $this->Co_Servicio_Fin,
            'St_Opcional' => $this->St_Opcional,
            'Nu_Orden' => $this->Nu_Orden,
            'Ti_Minimo' => $this->Ti_Minimo,
            'Ti_Maximo' => $this->Ti_Maximo,
            'St_Activo' => $this->St_Activo,
            'Co_Auditoria' => $this->Co_Auditoria,
        ]);

        return $dataProvider;
    }
}
