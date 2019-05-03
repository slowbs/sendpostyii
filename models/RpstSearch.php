<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rpst;

/**
 * RpstSearch represents the model behind the search form of `app\models\Rpst`.
 */
class RpstSearch extends Rpst
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'apcode', 'rpstcode'], 'safe'],
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
        $query = Rpst::find();

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

        $query->andFilterWhere(['like', 'a1', $this->a1])
            ->andFilterWhere(['like', 'a2', $this->a2])
            ->andFilterWhere(['like', 'a3', $this->a3])
            ->andFilterWhere(['like', 'a4', $this->a4])
            ->andFilterWhere(['like', 'a5', $this->a5])
            ->andFilterWhere(['like', 'a6', $this->a6])
            ->andFilterWhere(['like', 'a7', $this->a7])
            ->andFilterWhere(['like', 'a8', $this->a8])
            ->andFilterWhere(['like', 'a9', $this->a9])
            ->andFilterWhere(['like', 'a10', $this->a10])
            ->andFilterWhere(['like', 'a11', $this->a11])
            ->andFilterWhere(['like', 'a12', $this->a12])
            ->andFilterWhere(['like', 'b1', $this->b1])
            ->andFilterWhere(['like', 'b2', $this->b2])
            ->andFilterWhere(['like', 'b3', $this->b3])
            ->andFilterWhere(['like', 'b4', $this->b4])
            ->andFilterWhere(['like', 'b5', $this->b5])
            ->andFilterWhere(['like', 'b6', $this->b6])
            ->andFilterWhere(['like', 'b7', $this->b7])
            ->andFilterWhere(['like', 'b8', $this->b8])
            ->andFilterWhere(['like', 'b9', $this->b9])
            ->andFilterWhere(['like', 'b10', $this->b10])
            ->andFilterWhere(['like', 'b11', $this->b11])
            ->andFilterWhere(['like', 'b12', $this->b12])
            ->andFilterWhere(['like', 'apcode', $this->apcode])
            ->andFilterWhere(['like', 'rpstcode', $this->rpstcode]);

        return $dataProvider;
    }
}
