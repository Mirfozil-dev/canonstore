<?php

use yii\db\Migration;

/**
 * Class m210829_101139_alter_products_table
 */
class m210829_101139_alter_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('product_options');
        $this->addColumn('products', 'options', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210829_101139_alter_products_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210829_101139_alter_products_table cannot be reverted.\n";

        return false;
    }
    */
}
