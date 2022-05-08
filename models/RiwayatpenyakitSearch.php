<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Riwayatpenyakit;

/**
 * RiwayatpenyakitSearch represents the model behind the search form of `app\models\Riwayatpenyakit`.
 */
class RiwayatpenyakitSearch extends Riwayatpenyakit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['namapenyakit', 'tanggalsakit', 'tanggalsembuh', 'pendiagnosa', 'keterangan', 'sapi_id'], 'safe'],
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
        $query = Riwayatpenyakit::find();

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
            'tanggalsakit' => $this->tanggalsakit,
            'tanggalsembuh' => $this->tanggalsembuh,
        ]);

        $query->andFilterWhere(['like', 'namapenyakit', $this->namapenyakit])
            ->andFilterWhere(['like', 'pendiagnosa', $this->pendiagnosa])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'sapi_id', $this->sapi_id]);

        return $dataProvider;
    }
}