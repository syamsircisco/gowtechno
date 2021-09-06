<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "tb_services".
 *
 * @property int $id
 * @property string $judul_services
 * @property string $isi_services
 * @property string $slug_services
 * @property int $created_at
 * @property int $updated_at
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_services', 'isi_services'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['judul_services', 'slug_services'], 'string', 'max' => 255],
            [['slug_services'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul_services' => 'Judul Services',
            'isi_services' => 'Isi Services',
            'slug_services' => 'Slug Services',
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
                'attribute' => 'judul_services',
                'slugAttribute' => 'slug_services',
            ],
        ];
    }
}
