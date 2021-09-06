<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;
/**
 * This is the model class for table "tb_portovolio".
 *
 * @property int $id
 * @property string $judul_portovolio
 * @property string $foto_portovolio
 * @property string $slug_portovolio
 * @property int $created_at
 * @property int $updated_at
 */
class Portovolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_portovolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_portovolio'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['judul_portovolio', 'slug_portovolio'], 'string', 'max' => 255],
            [['slug_portovolio'], 'unique'],
            [['foto_portovolio'], 'file','skipOnEmpty' => true, 'extensions' => 'jpg, png,jpeg', 'mimeTypes' => 'image/jpeg, image/png',],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul_portovolio' => 'Judul Portofolio',
            'foto_portovolio' => 'Foto Portofolio',
            'slug_portovolio' => 'Slug Portofolio',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
            [
                'class' => SluggableBehavior::class,
                'attribute' => 'judul_portovolio',
                'slugAttribute' => 'slug_portovolio',
            ],
        ];
    }
}
