<?php

use yii\db\Migration;

/**
 * Class m210921_070751_feedback_table
 */
class m210921_070751_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'surname' => $this->string(30),
            'phone' => $this->string(20),
            'email' => $this->string(30),
            'comment' => $this->string(),
            'created_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210921_070751_feedback_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210921_070751_feedback_table cannot be reverted.\n";

        return false;
    }
    */
}
