<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_pasien".
 *
 * @property int $id_tp
 * @property int $id_pasien
 * @property string $tindakan
 * @property int $id_obat
 *
 * @property Obat $obat
 * @property Pasien $pasien
 */
class TindakanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'tindakan', 'id_obat'], 'required'],
            [['id_pasien', 'id_obat'], 'integer'],
            [['tindakan'], 'string', 'max' => 255],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['id_pasien' => 'id_pasien']],
            [['id_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::class, 'targetAttribute' => ['id_obat' => 'id_obat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tp' => 'Id Tp',
            'id_pasien' => 'Id Pasien',
            'tindakan' => 'Tindakan',
            'id_obat' => 'Id Obat',
        ];
    }

    /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(Obat::class, ['id_obat' => 'id_obat']);
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id_pasien' => 'id_pasien']);
    }
}
