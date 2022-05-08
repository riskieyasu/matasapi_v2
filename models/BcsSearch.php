<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bcs;

/**
 * BcsSearch represents the model behind the search form of `app\models\Bcs`.
 */
class BcsSearch extends Bcs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tulangbelakang', 'tulangiga', 'lemakdada', 'lemakekor', 'penyusutanotot', 'fisiksapi'], 'safe'],
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
        $query = Bcs::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'tulangbelakang', $this->tulangbelakang])
            ->andFilterWhere(['like', 'tulangiga', $this->tulangiga])
            ->andFilterWhere(['like', 'lemakdada', $this->lemakdada])
            ->andFilterWhere(['like', 'lemakekor', $this->lemakekor])
            ->andFilterWhere(['like', 'penyusutanotot', $this->penyusutanotot])
            ->andFilterWhere(['like', 'fisiksapi', $this->fisiksapi]);

        return $dataProvider;
    }
}
