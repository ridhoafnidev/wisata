<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_destinasi".
 *
 * @property int $id
 * @property string $jenis_destinasi
 * @property string $icon
 */
class JenisDestinasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_destinasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_destinasi', 'icon'], 'required'],
            [['jenis_destinasi', 'icon'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_destinasi' => 'Jenis Destinasi',
            'icon' => 'Icon',
        ];
    }
}
