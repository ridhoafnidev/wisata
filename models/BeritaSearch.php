<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Berita;

/**
 * BeritaSearch represents the model behind the search form about `app\models\Berita`.
 */
class BeritaSearch extends Berita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['gambar', 'judul', 'isi', 'createdAt'], 'safe'],
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
        $query = Berita::find();

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
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi', $this->isi]);

        return $dataProvider;
    }
}
