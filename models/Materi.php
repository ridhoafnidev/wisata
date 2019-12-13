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
 * @property string $link_youtube
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
            [['jenis_materi', 'judul_materi', 'deskripsi_materi', 'link_youtube'], 'required'],
            [['jenis_materi', 'judul_materi'], 'string', 'max' => 50],
            [['deskripsi_materi'], 'string', 'max' => 225],
            [['link_youtube'], 'string', 'max' => 255],
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
            'link_youtube' => 'Link Youtube',
        ];
    }
}
