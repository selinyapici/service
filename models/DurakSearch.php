<?php

namespace kouosl\service\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Durak;

/**
 * DurakSearch represents the model behind the search form about `app\models\Durak`.
 */
class DurakSearch extends Durak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isim', 'ogretimturu'], 'safe'],
            [['ogretim_id'], 'integer'],
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
        $query = Durak::find();

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
            'ogretim_id' => $this->ogretim_id,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'ogretimturu', $this->ogretimturu]);

        return $dataProvider;
    }
}
