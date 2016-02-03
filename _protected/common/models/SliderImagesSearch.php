<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SliderImages;

/**
 * SliderImagesSearch represents the model behind the search form about `app\modules\admin\models\SliderImages`.
 */
class SliderImagesSearch extends SliderImages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Slider_id'], 'integer'],
            [['Image_name', 'image_path'], 'safe'],
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
    public function search($params,$Slider_id=0, $video_id=0)
    {
        $query = SliderImages::find();
		if($Slider_id){
		$query->where(['Slider_id' => $Slider_id]);	
		}
		if($video_id){
		$query->where(['id' => $video_id]);	
		}
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
            'Slider_id' => $this->Slider_id,
        ]);

        $query->andFilterWhere(['like', 'Image_name', $this->Image_name])
            ->andFilterWhere(['like', 'image_path', $this->image_path]);

        return $dataProvider;
    }
}
