<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datasapi;

/**
 * DatasapiSearch represents the model behind the search form of `app\models\Datasapi`.
 */
class DatasapiSearch extends Datasapi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'beratbadan', 'lingkarbadan'], 'integer'],
            [['namasapi', 'rassapi', 'jeniskelamin', 'tanggallahir'], 'safe'],
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
        $query = Datasapi::find();

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
            'tanggallahir' => $this->tanggallahir,
            'beratbadan' => $this->beratbadan,
            'lingkarbadan' => $this->lingkarbadan,
        ]);

        $query->andFilterWhere(['like', 'namasapi', $this->namasapi])
            ->andFilterWhere(['like', 'rassapi', $this->rassapi])
            ->andFilterWhere(['like', 'jeniskelamin', $this->jeniskelamin]);

        return $dataProvider;
    }
}
