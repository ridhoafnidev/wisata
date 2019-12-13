<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Materi;

/**
 * MateriSearch represents the model behind the search form about `app\models\Materi`.
 */
class MateriSearch extends Materi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_materi'], 'integer'],
            [['jenis_materi', 'judul_materi', 'deskripsi_materi', 'link_youtube'], 'safe'],
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
        $query = Materi::find();

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
            'id_materi' => $this->id_materi,
        ]);

        $query->andFilterWhere(['like', 'jenis_materi', $this->jenis_materi])
            ->andFilterWhere(['like', 'judul_materi', $this->judul_materi])
            ->andFilterWhere(['like', 'link_youtube', $this->link_youtube])
            ->andFilterWhere(['like', 'deskripsi_materi', $this->deskripsi_materi]);

        return $dataProvider;
    }
}
