<?php

use yii\db\Migration;

/**
 * Class m210815_134145_alter_order_products_table
 */
class m210815_134145_alter_order_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('order_products', 'sum');
        $this->addColumn('order_products', 'sum', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210815_134145_alter_order_products_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210815_134145_alter_order_products_table cannot be reverted.\n";

        return false;
    }
    */
}
