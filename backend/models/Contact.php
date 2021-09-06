<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "tb_contact".
 *
 * @property int $id
 * @property string $jabatan_contact
 * @property string $nama_contact
 * @property string $no_hp_contact
 * @property string $foto_contact
 * @property int $created_at
 * @property int $updated_at
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jabatan_contact', 'nama_contact', 'no_hp_contact','email_contact'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['jabatan_contact', 'nama_contact', 'no_hp_contact','email_contact'], 'string', 'max' => 255],
            [['foto_contact'], 'file','skipOnEmpty' => true, 'extensions' => 'jpg, png,jpeg', 'mimeTypes' => 'image/jpeg, image/png',],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jabatan_contact' => 'Jabatan Contact',
            'nama_contact' => 'Nama Contact',
            'no_hp_contact' => 'No Hp Contact',
            'email_hp_contact' => 'Email Contact',
            'foto_contact' => 'Foto Contact',
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
        ];
    }
}
