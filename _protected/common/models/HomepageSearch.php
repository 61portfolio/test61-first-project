<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Homepage;

/**
 * HomepageSearch represents the model behind the search form about `common\models\Homepage`.
 */
class HomepageSearch extends Homepage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'slider'], 'integer'],
            [['second_image_back', 'second_image_content', 'second_feature_image', 'third_image_back', 'third_image_content', 'third_feature_image', 'fourth_image_back', 'fifth_image_back', 'our_story_content'], 'safe'],
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
        $query = Homepage::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'slider' => $this->slider,
        ]);

        $query->andFilterWhere(['like', 'second_image_back', $this->second_image_back])
            ->andFilterWhere(['like', 'second_image_content', $this->second_image_content])
            ->andFilterWhere(['like', 'second_feature_image', $this->second_feature_image])
            ->andFilterWhere(['like', 'third_image_back', $this->third_image_back])
            ->andFilterWhere(['like', 'third_image_content', $this->third_image_content])
            ->andFilterWhere(['like', 'third_feature_image', $this->third_feature_image])
            ->andFilterWhere(['like', 'fourth_image_back', $this->fourth_image_back])
            ->andFilterWhere(['like', 'fifth_image_back', $this->fifth_image_back])
            ->andFilterWhere(['like', 'our_story_content', $this->our_story_content]);

        return $dataProvider;
    }
}
