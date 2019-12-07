<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_materi".
 *
 * @property int $id_materi
 * @property string $jenis_materi
 * @property string $judul_materi
 * @property string $deskripsi_materi
 */
class Materi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_materi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_materi', 'jenis_materi', 'judul_materi', 'deskripsi_materi'], 'required'],
            [['id_materi'], 'integer'],
            [['jenis_materi', 'judul_materi'], 'string', 'max' => 50],
            [['deskripsi_materi'], 'string', 'max' => 225],
            [['id_materi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_materi' => 'Id Materi',
            'jenis_materi' => 'Jenis Materi',
            'judul_materi' => 'Judul Materi',
            'deskripsi_materi' => 'Deskripsi Materi',
        ];
    }
}
