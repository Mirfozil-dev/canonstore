<?php

use yii\db\Migration;

/**
 * Class m210814_103344_alter_reviews_table
 */
class m210814_103344_alter_reviews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('reviews', 'created_at', $this->integer('11'));
        $this->addColumn('reviews', 'updated_at', $this->integer('11'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210814_103344_alter_reviews_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210814_103344_alter_reviews_table cannot be reverted.\n";

        return false;
    }
    */
}
