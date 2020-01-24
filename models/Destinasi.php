<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destinasi".
 *
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property int $jenis_id
 * @property string $alamat
 * @property string $no_hp
 * @property string $website
 * @property string $ig
 * @property string $fb
 * @property string $yt
 * @property string $jam_buka
 * @property float $lat
 * @property float $lng
 * @property string $photo
 */
class Destinasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'destinasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_id', 'alamat', 'lat', 'lng'], 'required'],
            [['deskripsi', 'alamat'], 'string'],
            [['jenis_id'], 'integer'],
            [['lat', 'lng'], 'number'],
            [['nama', 'website', 'jam_buka'], 'string', 'max' => 100],
            [['no_hp'], 'string', 'max' => 20],
            [['ig', 'fb', 'yt', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'jenis_id' => 'Jenis ID',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'website' => 'Website',
            'ig' => 'Ig',
            'fb' => 'Fb',
            'yt' => 'Yt',
            'jam_buka' => 'Jam Buka',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'photo' => 'Photo',
        ];
    }
}
