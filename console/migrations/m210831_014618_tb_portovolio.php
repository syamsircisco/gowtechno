<?php

use yii\db\Migration;

/**
 * Class m210831_014618_tb_portovolio
 */
class m210831_014618_tb_portovolio extends Migration
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
        echo "m210831_014618_tb_portovolio cannot be reverted.\n";

        return false;
    }

   public function up()
    {
        $this->createTable('{{%tb_portovolio}}', [
            'id' => $this->primaryKey(),
            'judul_portovolio' => $this->string()->notNull(),
            'foto_portovolio' => $this->string()->notNull(),
            'slug_portovolio' => $this->string()->notNull()->unique(),
             'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
         $this->dropTable('{{%tb_portovolio}}');
    }
}
