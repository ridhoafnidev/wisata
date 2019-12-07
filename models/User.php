<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $nama_lengkap
 * @property string $email
 * @property string $password
 * @property int $nomor_hp
 * @property string $alamat
 *
 * @property TbAskQue[] $tbAskQues
 * @property TbKegiatan[] $tbKegiatans
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
            [['id_user', 'username', 'nama_lengkap', 'email', 'password', 'nomor_hp', 'alamat', 'createdAt', 'updateAt'], 'required'],
            [['id_user', 'nomor_hp'], 'integer'],
            [['username', 'nama_lengkap', 'email', 'alamat'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
            [['id_user'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'nama_lengkap' => 'Nama Lengkap',
            'email' => 'Email',
            'password' => 'Password',
            'nomor_hp' => 'Nomor Hp',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbAskQues()
    {
        return $this->hasMany(TbAskQue::className(), ['id_user' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbKegiatans()
    {
        return $this->hasMany(TbKegiatan::className(), ['id_user' => 'id_user']);
    }
}
