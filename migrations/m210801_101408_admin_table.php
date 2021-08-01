<?php

use yii\db\Migration;

/**
 * Class m210801_101408_admin_table
 */
class m210801_101408_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('administrators', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'password' => $this->string(),
            'status' => $this->smallInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210801_101408_admin_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210801_101408_admin_table cannot be reverted.\n";

        return false;
    }
    */
}
