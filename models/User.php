<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user".
 *
 * @property int $id_user
 * @property string $unique_id
 * @property string $username
 * @property string $nama_awal
 * @property string $nama_akhir
 * @property string $email
 * @property string $password
 * @property string $salt
 * @property int $nomor_hp
 * @property string $alamat
 * @property string|null $restore_id
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unique_id', 'username', 'nama_awal', 'nama_akhir', 'email', 'password', 'salt', 'nomor_hp', 'alamat'], 'required'],
            [['nomor_hp'], 'integer'],
            [['unique_id'], 'string', 'max' => 23],
            [['username', 'nama_awal', 'nama_akhir', 'email', 'alamat'], 'string', 'max' => 50],
            [['password', 'restore_id'], 'string', 'max' => 255],
            [['salt'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'unique_id' => 'Unique ID',
            'username' => 'Username',
            'nama_awal' => 'Nama Awal',
            'nama_akhir' => 'Nama Akhir',
            'email' => 'Email',
            'password' => 'Password',
            'salt' => 'Salt',
            'nomor_hp' => 'Nomor Hp',
            'alamat' => 'Alamat',
            'restore_id' => 'Restore ID',
        ];
    }
}
