<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_larangan".
 *
 * @property int $id_larangan
 * @property string $judul_larangan
 * @property string $deskripsi_larangan
 */
class Larangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_larangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_larangan', 'deskripsi_larangan'], 'required'],
            [['judul_larangan'], 'string', 'max' => 50],
            [['deskripsi_larangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_larangan' => 'Id Larangan',
            'judul_larangan' => 'Judul Larangan',
            'deskripsi_larangan' => 'Deskripsi Larangan',
        ];
    }
}
