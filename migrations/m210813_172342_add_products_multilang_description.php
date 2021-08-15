<?php

use yii\db\Migration;

/**
 * Class m210813_172342_add_products_multilang_description
 */
class m210813_172342_add_products_multilang_description extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('products', 'description', 'description_ru');
        $this->addColumn('products', 'description_en', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210813_172342_add_products_multilang_description cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210813_172342_add_products_multilang_description cannot be reverted.\n";

        return false;
    }
    */
}
