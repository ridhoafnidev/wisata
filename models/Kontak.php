<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $judul
 * @property string $pesan
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'judul', 'pesan'], 'required'],
            [['pesan'], 'string'],
            [['nama', 'email', 'judul'], 'string', 'max' => 100],
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
            'email' => 'Email',
            'judul' => 'Judul',
            'pesan' => 'Pesan',
        ];
    }
}
