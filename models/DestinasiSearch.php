<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Destinasi;

/**
 * DestinasiSearch represents the model behind the search form about `app\models\Destinasi`.
 */
class DestinasiSearch extends Destinasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jenis_id'], 'integer'],
            [['nama', 'deskripsi', 'alamat', 'no_hp', 'website', 'ig', 'fb', 'yt', 'jam_buka', 'photo'], 'safe'],
            [['lat', 'lng'], 'number'],
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
        $query = Destinasi::find();

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
            'jenis_id' => $this->jenis_id,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'ig', $this->ig])
            ->andFilterWhere(['like', 'fb', $this->fb])
            ->andFilterWhere(['like', 'yt', $this->yt])
            ->andFilterWhere(['like', 'jam_buka', $this->jam_buka])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
