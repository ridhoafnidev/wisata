<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Larangan;

/**
 * LaranganSearch represents the model behind the search form about `app\models\Larangan`.
 */
class LaranganSearch extends Larangan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_larangan'], 'integer'],
            [['judul_larangan', 'deskripsi_larangan'], 'safe'],
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
        $query = Larangan::find();

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
            'id_larangan' => $this->id_larangan,
        ]);

        $query->andFilterWhere(['like', 'judul_larangan', $this->judul_larangan])
            ->andFilterWhere(['like', 'deskripsi_larangan', $this->deskripsi_larangan]);

        return $dataProvider;
    }
}
