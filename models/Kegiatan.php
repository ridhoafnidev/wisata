<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kegiatan".
 *
 * @property int $id_kegiatan
 * @property int $kloter
 * @property int $priode
 * @property string $tanggal_keberangkatan
 * @property string $tanggal_kepulangan
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
            [['kloter', 'priode', 'tanggal_keberangkatan', 'tanggal_kepulangan', 'judul_kegiatan', 'deskripsi_kegiatan'], 'required'],
            [['kloter', 'priode'], 'integer'],
            [['tanggal_keberangkatan', 'tanggal_kepulangan'], 'safe'],
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
            'kloter' => 'Kloter',
            'priode' => 'Priode',
            'tanggal_keberangkatan' => 'Tanggal Keberangkatan',
            'tanggal_kepulangan' => 'Tanggal Kepulangan',
            'judul_kegiatan' => 'Judul Kegiatan',
            'deskripsi_kegiatan' => 'Deskripsi Kegiatan',
        ];
    }
}
