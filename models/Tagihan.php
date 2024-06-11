<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $id_tagihan
 * @property int $id_pasien
 * @property int $id_tp
 * @property int $id_obat
 * @property int $total_pembayaran
 */
class Tagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_tp', 'id_obat', 'total_pembayaran'], 'required'],
            [['id_pasien', 'id_tp', 'id_obat', 'total_pembayaran'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tagihan' => 'Id Tagihan',
            'id_pasien' => 'Id Pasien',
            'id_tp' => 'Id Tp',
            'id_obat' => 'Id Obat',
            'total_pembayaran' => 'Total Pembayaran',
        ];
    }
}
