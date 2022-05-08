<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hidung;

/**
 * HidungSearch represents the model behind the search form of `app\models\Hidung`.
 */
class HidungSearch extends Hidung
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sapi_id'], 'integer'],
            [['kondisi', 'foto'], 'safe'],
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
        $query = Hidung::find();

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
            'sapi_id' => $this->sapi_id,
        ]);

        $query->andFilterWhere(['like', 'kondisi', $this->kondisi])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
