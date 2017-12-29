<?php

namespace kouosl\service\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property string $isim
 * @property string $soyad
 * @property integer $telefon
 * @property integer $ogretim_id
 * @property string $duraklar
 * @property string $kalkisaatleri
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isim', 'soyad', 'telefon', 'ogretim_id', 'duraklar', 'kalkisaatleri'], 'required'],
            [['telefon', 'ogretim_id'], 'integer'],
            [['kalkisaatleri'], 'safe'],
            [['isim', 'soyad'], 'string', 'max' => 30],
            [['duraklar'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'isim' => 'Isim',
            'soyad' => 'Soyad',
            'telefon' => 'Telefon',
            'ogretim_id' => 'Ogretim ID',
            'duraklar' => 'Duraklar',
            'kalkisaatleri' => 'Kalkisaatleri',
        ];
    }
}
