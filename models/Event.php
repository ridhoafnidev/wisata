<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $gambar
 * @property string $judul
 * @property string $isi
 * @property string $createdAt
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gambar', 'judul', 'isi'], 'required'],
            [['isi'], 'string'],
            [['createdAt'], 'safe'],
            [['gambar', 'judul'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gambar' => 'Gambar',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'createdAt' => 'Tanggal',
        ];
    }
}
