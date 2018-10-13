<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Teams;

/**
 * TeamsSearch represents the model behind the search form about `common\models\Teams`.
 */
class TeamsSearch extends Teams
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fb_link', 'twitter_link', 'google_plus_link', 'image_file', 'name', 'designation'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Teams::find();

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

        $query->andFilterWhere(['like', 'fb_link', $this->fb_link])
            ->andFilterWhere(['like', 'twitter_link', $this->twitter_link])
            ->andFilterWhere(['like', 'google_plus_link', $this->google_plus_link])
            ->andFilterWhere(['like', 'image_file', $this->image_file])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'designation', $this->designation]);

        return $dataProvider;
    }
}
