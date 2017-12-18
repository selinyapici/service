<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "durak".
 *
 * @property string $isim
 * @property string $ogretimturu
 * @property integer $ogretim_id
 */
class Durak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'durak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isim', 'ogretimturu', 'ogretim_id'], 'required'],
            [['ogretim_id'], 'integer'],
            [['isim', 'ogretimturu'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'isim' => 'Isim',
            'ogretimturu' => 'Ogretimturu',
            'ogretim_id' => 'Ogretim ID',
        ];
    }
}
