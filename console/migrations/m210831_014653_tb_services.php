<?php

use yii\db\Migration;

/**
 * Class m210831_014653_tb_services
 */
class m210831_014653_tb_services extends Migration
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
        echo "m210831_014653_tb_services cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('{{%tb_services}}', [
            'id' => $this->primaryKey(),
            'judul_services' => $this->string()->notNull(),
            'isi_services' => $this->text()->notNull(),
            'slug_services' => $this->string()->notNull()->unique(),
             'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
         $this->dropTable('{{%tb_services}}');
    }
}
