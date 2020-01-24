<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galery".
 *
 * @property int $id
 * @property string $judul
 * @property string $gambar
 */
class Galery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'gambar'], 'required'],
            [['judul', 'gambar'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'gambar' => 'Gambar',
        ];
    }
}
