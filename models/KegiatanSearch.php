<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kegiatan;

/**
 * KegiatanSearch represents the model behind the search form about `app\models\Kegiatan`.
 */
class KegiatanSearch extends Kegiatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kegiatan'], 'integer'],
            [['judul_kegiatan', 'deskripsi_kegiatan'], 'safe'],
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
        $query = Kegiatan::find();

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
            'id_kegiatan' => $this->id_kegiatan,
        ]);

        $query->andFilterWhere(['like', 'judul_kegiatan', $this->judul_kegiatan])
            ->andFilterWhere(['like', 'deskripsi_kegiatan', $this->deskripsi_kegiatan]);

        return $dataProvider;
    }
}
