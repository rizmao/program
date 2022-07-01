<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kost".
 *
 * @property int $id
 * @property int $nomer
 * @property string $nama_kost
 * @property string $harga
 * @property string $jumlah_kamar
 * @property string $Keterangan
 */
class Kost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomer', 'nama_kost', 'harga', 'jumlah_kamar', 'Keterangan'], 'required'],
            [['nomer'], 'integer'],
            [['Keterangan'], 'string'],
            [['nama_kost', 'harga'], 'string', 'max' => 100],
            [['jumlah_kamar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomer' => 'Nomer',
            'nama_kost' => 'Nama Kost',
            'harga' => 'Harga',
            'jumlah_kamar' => 'Jumlah Kamar',
            'Keterangan' => 'Keterangan',
        ];
    }
}
