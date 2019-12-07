<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kegiatan".
 *
 * @property int $id_kegiatan
 * @property string $judul_kegiatan
 * @property string $deskripsi_kegiatan
 */
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_kegiatan', 'deskripsi_kegiatan'], 'required'],
            [['judul_kegiatan'], 'string', 'max' => 50],
            [['deskripsi_kegiatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kegiatan' => 'Id Kegiatan',
            'judul_kegiatan' => 'Judul Kegiatan',
            'deskripsi_kegiatan' => 'Deskripsi Kegiatan',
        ];
    }
}
