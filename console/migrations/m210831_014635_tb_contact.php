<?php

use yii\db\Migration;

/**
 * Class m210831_014635_tb_contact
 */
class m210831_014635_tb_contact extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210831_014635_tb_contact cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('{{%tb_contact}}', [
            'id' => $this->primaryKey(),
            'jabatan_contact' => $this->string()->notNull(),
            'nama_contact' => $this->string()->notNull(),
            'no_hp_contact' => $this->string()->notNull(),
            'email_contact' => $this->string()->notNull(),
            'foto_contact' => $this->string()->notNull(),
             'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
         $this->dropTable('{{%tb_contact}}');
    }
}
