<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_products}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%order}}`
 * - `{{%products}}`
 */
class m210710_124030_create_order_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_products}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(11),
            'product_id' => $this->integer(11),
            'quantity' => $this->smallInteger(2),
            'sum' => $this->string(100),
            'status' => $this->smallInteger(1),
        ]);

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-order_products-order_id}}',
            '{{%order_products}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-order_products-order_id}}',
            '{{%order_products}}',
            'order_id',
            '{{%order}}',
            'id',
            'CASCADE'
        );

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-order_products-product_id}}',
            '{{%order_products}}',
            'product_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-order_products-product_id}}',
            '{{%order_products}}',
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
        // drops foreign key for table `{{%order}}`
        $this->dropForeignKey(
            '{{%fk-order_products-order_id}}',
            '{{%order_products}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-order_products-order_id}}',
            '{{%order_products}}'
        );

        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-order_products-product_id}}',
            '{{%order_products}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-order_products-product_id}}',
            '{{%order_products}}'
        );

        $this->dropTable('{{%order_products}}');
    }
}
