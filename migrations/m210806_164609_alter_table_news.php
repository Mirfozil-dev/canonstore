<?php

use yii\db\Migration;

/**
 * Class m210806_164609_alter_table_news
 */
class m210806_164609_alter_table_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('news', 'date');
        $this->addColumn('news', 'created_at', $this->integer('11'));
        $this->addColumn('news', 'updated_at', $this->integer('11'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210806_164609_alter_table_news cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropColumn('news', 'date');
        $this->addColumn('news', 'created_at', $this->integer('11'));
        $this->addColumn('news', 'updated_at', $this->integer('11'));
    }

    public function down()
    {
        echo "m210806_164609_alter_table_news cannot be reverted.\n";

        return false;
    }

}
