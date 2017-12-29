<?php

namespace kouosl\service\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\service\models\Service;

/**
 * ServiceSearch represents the model behind the search form about `kouosl\service\models\Service`.
 */
class ServiceSearch extends Service
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isim', 'soyad', 'duraklar', 'kalkisaatleri'], 'safe'],
            [['telefon', 'ogretim_id'], 'integer'],
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
        $query = Service::find();

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
            'telefon' => $this->telefon,
            'ogretim_id' => $this->ogretim_id,
            'kalkisaatleri' => $this->kalkisaatleri,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'soyad', $this->soyad])
            ->andFilterWhere(['like', 'duraklar', $this->duraklar]);

        return $dataProvider;
    }
}
