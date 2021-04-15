<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property int $id
 * @property string $email
 * @property string $nama
 * @property string $deskripsi
 * @property string $createdAt
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
            [['email', 'nama', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['createdAt'], 'safe'],
            [['email', 'nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'createdAt' => 'Created At',
        ];
    }
}
