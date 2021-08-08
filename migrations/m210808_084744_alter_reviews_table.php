<?php

use yii\db\Migration;

/**
 * Class m210808_084744_alter_reviews_table
 */
class m210808_084744_alter_reviews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('reviews', 'product_id', $this->integer(11));

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-reviews-product_id}}',
            '{{%reviews}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-reviews-product_id}}',
            '{{%reviews}}',
            'product_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210808_084744_alter_reviews_table cannot be reverted.\n";

        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-reviews-product_id}}',
            '{{%reviews}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-reviews-product_id}}',
            '{{%reviews}}'
        );

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210808_084744_alter_reviews_table cannot be reverted.\n";

        return false;
    }
    */
}
