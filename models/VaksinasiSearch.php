<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vaksinasi;

/**
 * VaksinasiSearch represents the model behind the search form of `app\models\Vaksinasi`.
 */
class VaksinasiSearch extends Vaksinasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'datasapi_id'], 'integer'],
            [['namavaksin', 'tanggalvaksin', 'pemberivaksin', 'keterangan'], 'safe'],
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
        $query = Vaksinasi::find();

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
            'tanggalvaksin' => $this->tanggalvaksin,
            'datasapi_id' => $this->datasapi_id,
        ]);

        $query->andFilterWhere(['like', 'namavaksin', $this->namavaksin])
            ->andFilterWhere(['like', 'pemberivaksin', $this->pemberivaksin])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
