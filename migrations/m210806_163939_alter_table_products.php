<?php

use yii\db\Migration;

/**
 * Class m210806_163939_alter_table_products
 */
class m210806_163939_alter_table_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('products', 'date');
        $this->addColumn('products', 'created_at', $this->integer('11'));
        $this->addColumn('products', 'updated_at', $this->integer('11'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210806_163939_alter_table_products cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropColumn('products', 'date');
        $this->addColumn('products', 'created_at', $this->integer('11'));
        $this->addColumn('products', 'updated_at', $this->integer('11'));
    }

    public function down()
    {
        echo "m210806_163939_alter_table_products cannot be reverted.\n";

        return false;
    }
}
