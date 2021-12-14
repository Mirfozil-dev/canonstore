<?php

use yii\db\Migration;

/**
 * Class m210923_041531_add_column_feedback
 */
class m210923_041531_add_column_feedback extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('feedback', 'updated_at', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210923_041531_add_column_feedback cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210923_041531_add_column_feedback cannot be reverted.\n";

        return false;
    }
    */
}
