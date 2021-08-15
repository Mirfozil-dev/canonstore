<?php

use yii\db\Migration;

/**
 * Class m210814_132337_change_password_lenght
 */
class m210814_132337_change_password_lenght extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('users', 'password', $this->string(765));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210814_132337_change_password_lenght cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210814_132337_change_password_lenght cannot be reverted.\n";

        return false;
    }
    */
}
