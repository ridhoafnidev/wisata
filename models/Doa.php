<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_doa".
 *
 * @property int $id_doa
 * @property string $judul_doa
 * @property string $gambar_doa
 * @property string $deskripsi_doa
 */
class Doa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_doa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_doa', 'judul_doa', 'gambar_doa', 'deskripsi_doa'], 'required'],
            [['id_doa'], 'integer'],
            [['judul_doa', 'gambar_doa'], 'string', 'max' => 50],
            [['deskripsi_doa'], 'string', 'max' => 255],
            [['id_doa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_doa' => 'Id Doa',
            'judul_doa' => 'Judul Doa',
            'gambar_doa' => 'Gambar Doa',
            'deskripsi_doa' => 'Deskripsi Doa',
        ];
    }
}
